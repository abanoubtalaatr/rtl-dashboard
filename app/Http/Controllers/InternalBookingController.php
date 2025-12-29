<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInternalBookingRequest;
use App\Http\Requests\UpdateInternalBookingRequest;
use App\Models\Booking;
use App\Models\Car;
use App\Models\CarType;
use App\Models\Currency;
use App\Models\Driver;
use App\Models\Location;
use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InternalBookingController extends Controller
{
    /**
     * Display a listing of internal bookings.
     */
    public function index(Request $request)
    {
        $query = Booking::with([
            'driver',
            'returnDriver',
            'car',
            'carType',
            'currency',
            'creator',
        ])->internal();

        // Default: today only
        $fromDate = $request->filled('from_date') ? $request->from_date : now()->toDateString();
        $toDate = $request->filled('to_date') ? $request->to_date : now()->toDateString();

        $query->whereDate('booking_from', '>=', $fromDate)
            ->whereDate('booking_to', '<=', $toDate);

        // Permissions
        if (! Auth::user()->isSuperAdmin() || ! Auth::user()->isAdmin()) {
            $query->where('created_by', Auth::id());
        }
        if ($request->filled('user_id')) {
            $query->where('created_by', $request->user_id);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('room_name', 'like', "%{$search}%")
                    ->orWhereHas('driver', fn ($q) => $q->where('name', 'like', "%{$search}%"));
            });
        }

        // ==================== COMBINED PAYMENT + CURRENCY STATS ====================
        $statsQuery = clone $query;

        $paymentCurrencyRaw = $statsQuery
            ->select(
                'payment_type',
                'currency_id',
                \DB::raw('COUNT(*) as count'),
                \DB::raw('SUM(booking_price) as total_price')
            )
            ->groupBy('payment_type', 'currency_id')
            ->with('currency')
            ->get();

        $currencies = Currency::pluck('name', 'id');

        $paymentLabels = Booking::getPaymentTypeOptions();
        $paymentCurrencyStats = collect($paymentLabels)->map(function ($label, $key) use ($paymentCurrencyRaw, $currencies) {
            $items = $paymentCurrencyRaw->where('payment_type', $key);

            $currenciesData = $items->map(function ($item) use ($currencies) {
                return [
                    'name' => $currencies->get($item->currency_id, 'غير معروف'),
                    'count' => $item->count,
                    'total_price' => $item->total_price ?? 0,
                ];
            })->sortByDesc('total_price')->values();

            // Clean & extendable color mapping
            $colorMap = [
                'cash' => 'success',
                'visa' => 'primary',
                'credit' => 'warning',
                'rooms' => 'info',
                'free' => 'secondary',   // Add more easily here
                // 'another_type' => 'danger',
            ];

            $color = $colorMap[$key] ?? 'secondary'; // Default fallback

            return [
                'key' => $key,
                'label' => $label,
                'items' => $currenciesData,
                'total_count' => $items->sum('count'),
                'color' => $color,
            ];
        })->filter(fn ($stat) => $stat['total_count'] > 0)->values();
        // ==================== OVERALL TOTALS ====================
        $overallCount = $query->count();
        $overallTotal = $query->sum('booking_price'); // EGP only if that's your base

        // Paginated bookings
        $bookings = $query->latest()->paginate(50);
        $users = User::whereNotIn('email', ['nagy@admin.com', 'abanoub@admin.com', 'amr@admin.com'])->get();

        return view('internal-bookings.index', compact(
            'bookings',
            'users',
            'paymentCurrencyStats',
            'overallCount',
            'overallTotal'
        ));
    }

    /**
     * Show the form for creating a new internal booking.
     */
    public function create()
    {
        $drivers = Driver::all();
        $cars = Car::all();
        $carTypes = CarType::all();
        $currencies = Currency::all();
        $locations = Location::all();
        $companies = \App\Models\Company::all();
        $paymentTypes = Booking::getPaymentTypeOptions();
        $supervisors = Supervisor::all();
        $lastBooking = Booking::where('created_by', Auth::id())->internal()->latest()->first();

        // dd($lastBooking);
        return view('internal-bookings.create', compact(
            'drivers',
            'cars',
            'carTypes',
            'currencies',
            'locations',
            'companies',
            'paymentTypes',
            'supervisors',
            'lastBooking'
        ));
    }

    /**
     * Store a newly created internal booking in storage.
     */
    public function store(StoreInternalBookingRequest $request)
    {

        $data = $request->validated();

        $data['type'] = 'internal';
        $data['created_by'] = Auth::id();
        if ($request->has_return == 'on') {
            $data['has_return'] = true;
        } else {
            $data['has_return'] = false;
        }
        if ($request->on_phone == 'on') {
            $data['on_phone'] = true;
        } else {
            $data['on_phone'] = false;
        }
        // إذا لم يتم تحديد return_driver_id، نستخدم نفس السائق
        if (! isset($data['return_driver_id'])) {
            $data['return_driver_id'] = $data['driver_id'];
        }

        if (isset($data['departure_to'])) {
            Location::create([
                'name' => $data['departure_to'],
                'type' => 'hotel',
                'created_by' => Auth::id(),
            ]);
        }
        if (isset($data['return_to'])) {
            Location::create([
                'name' => $data['return_to'],
                'type' => 'hotel',
                'created_by' => Auth::id(),
            ]);
        }

        $booking = Booking::create($data);

        return redirect()
            ->route('internal-bookings.show', $booking)
            ->with('success', 'تم إنشاء الحجز الداخلي بنجاح');
    }

    /**
     * Display the specified internal booking.
     */
    public function show(Booking $internalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بعرض هذا الحجز');
        }

        $internalBooking->load([
            'driver',
            'returnDriver',
            'car',
            'carType',
            'currency',
            'creator',
        ]);

        return view('internal-bookings.show', compact('internalBooking'));
    }

    /**
     * Show the form for editing the specified internal booking.
     */
    public function edit(Booking $internalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        $drivers = Driver::all();
        $cars = Car::all();
        $carTypes = CarType::all();
        $currencies = Currency::all();
        $locations = Location::all();
        $companies = \App\Models\Company::all();
        $paymentTypes = Booking::getPaymentTypeOptions();

        if (auth()->user()->isSuperAdmin()) {
            $supervisors = Supervisor::all();
        } else {
            $supervisors = Supervisor::where('user_id', Auth::id())->get();
        }

        return view('internal-bookings.edit', compact(
            'internalBooking',
            'drivers',
            'cars',
            'carTypes',
            'currencies',
            'locations',
            'companies',
            'paymentTypes',
            'supervisors'
        ));
    }

    /**
     * Update the specified internal booking in storage.
     */
    public function update(UpdateInternalBookingRequest $request, Booking $internalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        $data = $request->validated();

        // إذا لم يتم تحديد return_driver_id، نستخدم نفس السائق
        if (! isset($data['return_driver_id'])) {
            $data['return_driver_id'] = $data['driver_id'];
        }

        $internalBooking->update($data);

        return redirect()
            ->route('internal-bookings.show', $internalBooking)
            ->with('success', 'تم تحديث الحجز الداخلي بنجاح');
    }

    /**
     * Remove the specified internal booking from storage.
     */
    public function destroy(Booking $internalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بحذف هذا الحجز');
        }

        $internalBooking->delete();

        return redirect()
            ->route('internal-bookings.index')
            ->with('success', 'تم حذف الحجز الداخلي بنجاح');
    }

    /**
     * Toggle the return status of a booking.
     */
    public function toggleReturn(Booking $internalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        if ($internalBooking->returned) {
            $internalBooking->markAsNotReturned();
            $message = 'تم إلغاء حالة الإرجاع بنجاح';
        } else {
            $internalBooking->markAsReturned();
            $message = 'تم تحديد الحجز كمُرجع بنجاح';
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }

    /**
     * Display a listing of unreturned internal bookings.
     */
    public function unreturned(Request $request)
    {
        $query = Booking::with([
            'driver',
            'returnDriver',
            'car',
            'carType',
            'currency',
            'creator',
        ])->internal()->unreturned();

        // إذا كان المستخدم ليس super admin، يشوف حجوزاته فقط
        if (! Auth::user()->isSuperAdmin()) {
            $query->where('created_by', Auth::id());
        }

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('room_name', 'like', "%{$search}%")
                    ->orWhereHas('driver', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $bookings = $query->latest()->paginate(15);

        return view('internal-bookings.unreturned', compact('bookings'));
    }
}
