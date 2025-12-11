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

        // إذا لم يتم تحديد from_date أو to_date، فعرض حجوزات اليوم الحالي فقط بشكل افتراضي
        $fromDate = $request->filled('from_date') ? $request->from_date : now()->toDateString();
        $toDate = $request->filled('to_date') ? $request->to_date : now()->toDateString();

        $query->whereDate('booking_from', '>=', $fromDate)
            ->whereDate('booking_to', '<=', $toDate);

        // إذا كان المستخدم ليس super admin، يشوف حجوزاته فقط
        if (! Auth::user()->isSuperAdmin()) {
            $query->where('created_by', Auth::id());
        }
        if ($request->filled('user_id')) {
            $query->where('created_by', $request->user_id);
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
        $users = User::get();

        return view('internal-bookings.index', compact('bookings', 'users'));
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

        return view('internal-bookings.create', compact(
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
     * Store a newly created internal booking in storage.
     */
    public function store(StoreInternalBookingRequest $request)
    {

        $data = $request->validated();
        $data['type'] = 'internal';
        $data['created_by'] = Auth::id();
        if($request->has_return =='on') {
            $data['has_return'] = true;
        } else {
            $data['has_return'] = false;
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

        if(auth()->user()->isSuperAdmin()) {
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
