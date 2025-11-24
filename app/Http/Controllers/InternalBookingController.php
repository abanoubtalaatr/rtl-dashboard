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
            'departureFromLocation',
            'departureToLocation',
            'returnFromLocation',
            'returnToLocation',
            'creator'
        ])->internal();

        // إذا كان المستخدم ليس super admin، يشوف حجوزاته فقط
        if (!Auth::user()->isSuperAdmin()) {
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

        return view('internal-bookings.index', compact('bookings'));
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

        return view('internal-bookings.create', compact(
            'drivers',
            'cars',
            'carTypes',
            'currencies',
            'locations',
            'companies',
            'paymentTypes'
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
        
        // إذا لم يتم تحديد return_driver_id، نستخدم نفس السائق
        if (!isset($data['return_driver_id'])) {
            $data['return_driver_id'] = $data['driver_id'];
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
        if (!Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بعرض هذا الحجز');
        }

        $internalBooking->load([
            'driver',
            'returnDriver',
            'car',
            'carType',
            'currency',
            'departureFromLocation',
            'departureToLocation',
            'returnFromLocation',
            'returnToLocation',
            'creator'
        ]);

        return view('internal-bookings.show', compact('internalBooking'));
    }

    /**
     * Show the form for editing the specified internal booking.
     */
    public function edit(Booking $internalBooking)
    {
        // التحقق من الصلاحيات
        if (!Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        $drivers = Driver::all();
        $cars = Car::all();
        $carTypes = CarType::all();
        $currencies = Currency::all();
        $locations = Location::all();
        $companies = \App\Models\Company::all();
        $paymentTypes = Booking::getPaymentTypeOptions();

        return view('internal-bookings.edit', compact(
            'internalBooking',
            'drivers',
            'cars',
            'carTypes',
            'currencies',
            'locations',
            'companies',
            'paymentTypes'
        ));
    }

    /**
     * Update the specified internal booking in storage.
     */
    public function update(UpdateInternalBookingRequest $request, Booking $internalBooking)
    {
        // التحقق من الصلاحيات
        if (!Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بتعديل هذا الحجز');
        }

        $data = $request->validated();
        
        // إذا لم يتم تحديد return_driver_id، نستخدم نفس السائق
        if (!isset($data['return_driver_id'])) {
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
        if (!Auth::user()->isSuperAdmin() && $internalBooking->created_by !== Auth::id()) {
            abort(403, 'غير مصرح لك بحذف هذا الحجز');
        }

        $internalBooking->delete();

        return redirect()
            ->route('internal-bookings.index')
            ->with('success', 'تم حذف الحجز الداخلي بنجاح');
    }
}
