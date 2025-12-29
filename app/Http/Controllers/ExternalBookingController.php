<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Driver;
use App\Models\Booking;
use App\Models\CarType;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Location;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Models\ExternalLocation;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreExternalBookingRequest;
use App\Http\Requests\UpdateExternalBookingRequest;

class ExternalBookingController extends Controller
{
    public function index(Request $request)
    {
        $query = Booking::with([
            'driver',
            'returnDriver',
            'car',
            'carType',
            'currency',
            'customer',
            'company',
            'creator',
        ])->external();

        // Default: today only
        $fromDate = $request->filled('from_date') ? $request->from_date : now()->toDateString();
        $toDate = $request->filled('to_date') ? $request->to_date : now()->toDateString();

        $query->whereDate('booking_from', '>=', $fromDate)
            ->whereDate('booking_to', '<=', $toDate);

        // Permissions
        if (! Auth::user()->isAdmin()) {
            $query->where('created_by', Auth::id());
        }
        if ($request->filled('user_id')) {
            $query->where('created_by', $request->user_id);
        }

        // Search by customer or driver name
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('customer', fn ($q) => $q->where('name', 'like', "%{$search}%"))
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

            $colorMap = [
                'cash' => 'success',
                'visa' => 'primary',
                'credit' => 'warning',
                'rooms' => 'info',
                'free' => 'secondary',
            ];

            $color = $colorMap[$key] ?? 'secondary';

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
        $overallTotal = $query->sum('booking_price');

        // Paginated bookings
        $bookings = $query->latest()->paginate(50);
        
        $users = User::whereNotIn('email', ['nagy@admin.com', 'abanoub@admin.com', 'amr@admin.com'])->get();

        return view('external-bookings.index', compact(
            'bookings',
            'users',
            'paymentCurrencyStats',
            'overallCount',
            'overallTotal'
        ));
    }

    /**
     * Show the form for creating a new external booking.
     */
    public function create()
    {
        $drivers = Driver::all();
        $cars = Car::all();
        $carTypes = CarType::all();
        $currencies = Currency::all();
        $customers = Customer::all();
        $companies = \App\Models\Company::all();
        $paymentTypes = Booking::getPaymentTypeOptions();
        $locations = Location::all();
        $supervisors = Supervisor::all();
        $lastBooking = Booking::where('created_by', Auth::id())->external()->latest()->first();
        $externalLocations = ExternalLocation::all();
        
        return view('external-bookings.create', compact('drivers', 'cars', 'carTypes', 'currencies', 'customers', 'companies', 'paymentTypes', 'locations', 'supervisors', 'lastBooking', 'externalLocations'));
    }

    /**
     * Store a newly created external booking in storage.
     */
    public function store(StoreExternalBookingRequest $request)
    {

        $data = $request->validated();
        $data['type'] = 'external';
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

        $booking = Booking::create($data);

        return redirect()
            ->route('external-bookings.show', $booking)
            ->with('success', 'تم إنشاء الحجز الخارجي بنجاح');
    }

    /**
     * Display the specified external booking.
     */
    public function show(Booking $externalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isAdmin() && $externalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بعرض هذا الحجز');
        }

        $externalBooking->load([
            'driver',
            'returnDriver',
            'car',
            'carType',
            'currency',
            'customer',
            'company',
            'creator',
            'supervisor',
            'returnCar',
        ]);

        return view('external-bookings.show', compact('externalBooking'));
    }

    /**
     * Show the form for editing the specified external booking.
     */
    public function edit(Booking $externalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isAdmin() && $externalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        $drivers = Driver::all();
        $cars = Car::all();
        $carTypes = CarType::all();
        $currencies = Currency::all();
        $customers = Customer::all();
        $companies = \App\Models\Company::all();
        $paymentTypes = Booking::getPaymentTypeOptions();
        $locations = Location::all();
        $supervisors = Supervisor::all();

        return view('external-bookings.edit', compact(
            'externalBooking',
            'drivers',
            'cars',
            'carTypes',
            'currencies',
            'customers',
            'companies',
            'paymentTypes',
            'locations',
            'supervisors'
        ));
    }

    /**
     * Update the specified external booking in storage.
     */
    public function update(UpdateExternalBookingRequest $request, Booking $externalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isAdmin() && $externalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        $data = $request->validated();

        // إذا لم يتم تحديد return_driver_id، نستخدم نفس السائق
        if (! isset($data['return_driver_id'])) {
            $data['return_driver_id'] = $data['driver_id'];
        }

        $externalBooking->update($data);

        return redirect()
            ->route('external-bookings.show', $externalBooking)
            ->with('success', 'تم تحديث الحجز الخارجي بنجاح');
    }

    /**
     * Remove the specified external booking from storage.
     */
    public function destroy(Booking $externalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isAdmin() && $externalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بحذف هذا الحجز');
        }

        $externalBooking->delete();

        return redirect()
            ->route('external-bookings.index')
            ->with('success', 'تم حذف الحجز الخارجي بنجاح');
    }

    /**
     * Toggle the return status of a booking.
     */
    public function toggleReturn(Booking $externalBooking)
    {
        // التحقق من الصلاحيات
        if (! Auth::user()->isAdmin() && $externalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        if ($externalBooking->returned) {
            $externalBooking->markAsNotReturned();
            $message = 'تم إلغاء حالة الإرجاع بنجاح';
        } else {
            $externalBooking->markAsReturned();
            $message = 'تم تحديد الحجز كمُرجع بنجاح';
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }

    /**
     * Display a listing of unreturned external bookings.
     */
    public function unreturned(Request $request)
    {
        $query = Booking::with([
            'driver',
            'returnDriver',
            'car',
            'carType',
            'currency',
            'customer',
            'company',
            'creator',
            'supervisor',
            'returnCar',
        ])->external()->unreturned();

        // إذا كان المستخدم ليس super admin، يشوف حجوزاته فقط
        if (! Auth::user()->isAdmin()) {
            $query->where('created_by', Auth::id());
        }

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('customer', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                })
                    ->orWhereHas('driver', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $bookings = $query->latest()->paginate(15);

        return view('external-bookings.unreturned', compact('bookings'));
    }
}
