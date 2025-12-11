<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use App\Models\Car;
use App\Models\Company;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Driver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = Booking::with(['customer', 'company', 'driver', 'car', 'currency']);

        // Filter by driver
        if ($request->filled('driver_id')) {
            $query->where('driver_id', $request->driver_id);
        }

        // Filter by company
        if ($request->filled('company_id')) {
            $query->where('company_id', $request->company_id);
        }

        // Filter by customer
        if ($request->filled('customer_id')) {
            $query->where('customer_id', $request->customer_id);
        }

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('customer', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                })
                    ->orWhereHas('company', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    })
                    ->orWhereHas('driver', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $bookings = $query->latest('booking_from')->paginate(10)->withQueryString();

        // Get filter options
        $drivers = Driver::orderBy('name')->get();
        $companies = Company::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();

        return view('bookings.index', compact('bookings', 'drivers', 'companies', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $drivers = Driver::orderBy('name')->get();
        $companies = Company::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $cars = Car::orderBy('plate_number')->get();
        $currencies = Currency::orderBy('name')->get();

        return view('bookings.create', compact('drivers', 'companies', 'customers', 'cars', 'currencies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request): RedirectResponse
    {
        Booking::create($request->validated());

        return redirect()->route('bookings.index')
            ->with('success', 'تم إضافة الحجز بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking): View
    {
        $booking->load(['customer', 'company', 'driver', 'car', 'currency']);

        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking): View
    {
        $drivers = Driver::orderBy('name')->get();
        $companies = Company::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $cars = Car::orderBy('plate_number')->get();
        $currencies = Currency::orderBy('name')->get();

        return view('bookings.edit', compact('booking', 'drivers', 'companies', 'customers', 'cars', 'currencies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking): RedirectResponse
    {
        $booking->update($request->validated());

        return redirect()->route('bookings.index')
            ->with('success', 'تم تحديث بيانات الحجز بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking): RedirectResponse
    {
        $booking->delete();

        return redirect()->route('bookings.index')
            ->with('success', 'تم حذف الحجز بنجاح.');
    }

    // app/Http/Controllers/BookingController.php

    public function search(Request $request)
    {

        $query = Booking::query();

        if ($request->filled('room')) {
            $query->where('room_name', 'like', "%{$request->room}%");
        }

        if ($request->filled('date')) {
            $date = $request->date;
            $query->where(function ($q) use ($date) {
                $q->where('type', 'internal')->whereDate('booking_from', '<=', $date)
                    ->whereDate('booking_to', '>=', $date);
            });
        }

        $bookings = $query->with(['driver', 'car', 'currency', 'company'])
            ->limit(20)
            ->get();

        return response()->json($bookings);
    }
}
