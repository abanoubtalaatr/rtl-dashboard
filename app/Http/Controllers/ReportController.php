<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Models\Driver;
use App\Models\Income;
use App\Models\Booking;
use App\Models\Company;
use App\Models\Expense;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Location;
use Illuminate\View\View;
use App\Models\CarExpense;
use App\Models\DriverSalary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function usersBookings(Request $request)
    {
        // Get all currencies for mapping
        $currencies = Currency::pluck('name', 'id');

        $users = User::query()
            ->select('id', 'name')
            ->withCount([
                'createdBookings as total_bookings',
                'createdBookings as cash_bookings' => fn($q) => $q->where('payment_type', 'cash'),
                'createdBookings as visa_bookings' => fn($q) => $q->where('payment_type', 'visa'),
                'createdBookings as credit_bookings' => fn($q) => $q->where('payment_type', 'credit'),
                'createdBookings as rooms_bookings' => fn($q) => $q->where('payment_type', 'rooms'),
                'createdBookings as free_bookings' => fn($q) => $q->where('payment_type', 'free'),
            ])
            ->withSum(['createdBookings as total_amount'], 'booking_price')
            ->withSum(['createdBookings as cash_amount' => fn($q) => $q->where('payment_type', 'cash')], 'booking_price')
            ->withSum(['createdBookings as visa_amount' => fn($q) => $q->where('payment_type', 'visa')], 'booking_price')
            ->withSum(['createdBookings as credit_amount' => fn($q) => $q->where('payment_type', 'credit')], 'booking_price')
            ->withSum(['createdBookings as rooms_amount' => fn($q) => $q->where('payment_type', 'rooms')], 'booking_price')
            ->withSum(['createdBookings as free_amount' => fn($q) => $q->where('payment_type', 'free')], 'booking_price')
            ->get();

        // Add currency breakdown to each user
        foreach ($users as $user) {
            $currencyStats = Booking::where('created_by', $user->id)
                ->select('currency_id')
                ->selectRaw('COUNT(*) as count')
                ->selectRaw('SUM(booking_price) as total')
                ->groupBy('currency_id')
                ->get();

            $user->currency_breakdown = $currencyStats->mapWithKeys(function ($item) use ($currencies) {
                $name = $currencies->get($item->currency_id, 'غير معروف');
                return [$item->currency_id => [
                    'name'  => $name,
                    'count' => $item->count,
                    'total' => $item->total ?? 0,
                ]];
            });
        }

        // Grand totals (payment types)
        $grandTotal = [
            'cash'          => $users->sum('cash_bookings'),
            'visa'          => $users->sum('visa_bookings'),
            'credit'        => $users->sum('credit_bookings'),
            'rooms'         => $users->sum('rooms_bookings'),
            'free'          => $users->sum('free_bookings'),
            'cash_amount'   => $users->sum('cash_amount'),
            'visa_amount'   => $users->sum('visa_amount'),
            'credit_amount' => $users->sum('credit_amount'),
            'rooms_amount'  => $users->sum('rooms_amount'),
            'free_amount'   => $users->sum('free_amount'),
            'total_amount'  => $users->sum('total_amount'),
        ];

        // Grand total by currency
        $grandCurrency = Booking::select('currency_id')
            ->selectRaw('COUNT(*) as count')
            ->selectRaw('SUM(booking_price) as total')
            ->groupBy('currency_id')
            ->get()
            ->mapWithKeys(fn($item) => [
                $item->currency_id => [
                    'name'  => $currencies->get($item->currency_id, 'غير معروف'),
                    'count' => $item->count,
                    'total' => $item->total ?? 0,
                ]
            ]);

        return view('reports.users-bookings', compact('users', 'grandTotal', 'grandCurrency', 'currencies'));
    }

    /**
     * Internal bookings report
     */
    public function internalBookings(Request $request): View
    {
        $query = Booking::with(['driver', 'car', 'fromLocation', 'toLocation'])
            ->where('type', 'internal');

        // Filter by driver
        if ($request->filled('driver_id')) {
            $query->where('driver_id', $request->driver_id);
        }

        // Filter by car
        if ($request->filled('car_id')) {
            $query->where('car_id', $request->car_id);
        }

        // Filter by payment type
        if ($request->filled('payment_type')) {
            $query->where('payment_type', $request->payment_type);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('booking_from', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('booking_from', '<=', $request->date_to);
        }

        // Search by driver name
        if ($request->filled('search_driver')) {
            $query->whereHas('driver', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search_driver . '%');
            });
        }
        if ($request->filled('user_id')) {
            $query->where('created_by', $request->user_id);
        }

        // Search by room/location
        if ($request->filled('search_room')) {
            $query->where(function ($q) use ($request) {
                $q->whereHas('fromLocation', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->search_room . '%');
                })->orWhereHas('toLocation', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->search_room . '%');
                });
            });
        }

        $bookings = $query->latest('booking_from')->paginate(20)->withQueryString();
        $drivers = Driver::orderBy('name')->get();
        $users = User::orderBy('name')->get();
        $cars = Car::orderBy('plate_number')->get();

        return view('reports.internal-bookings', compact('bookings', 'drivers', 'cars', 'users'));
    }

    /**
     * External bookings report
     */
    public function externalBookings(Request $request): View
    {
        $query = Booking::with(['driver', 'car', 'company', 'customer', 'fromLocation', 'toLocation'])
            ->where('type', 'external');

        // Filter by driver
        if ($request->filled('driver_id')) {
            $query->where('driver_id', $request->driver_id);
        }

        // Filter by car
        if ($request->filled('car_id')) {
            $query->where('car_id', $request->car_id);
        }

        // Filter by payment type
        if ($request->filled('payment_type')) {
            $query->where('payment_type', $request->payment_type);
        }

        // Filter by company
        if ($request->filled('company_id')) {
            $query->where('company_id', $request->company_id);
        }

        // Filter by customer
        if ($request->filled('customer_id')) {
            $query->where('customer_id', $request->customer_id);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('booking_from', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('booking_from', '<=', $request->date_to);
        }

        // Search by driver name
        if ($request->filled('search_driver')) {
            $query->whereHas('driver', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search_driver . '%');
            });
        }

        // Search by company name
        if ($request->filled('search_company')) {
            $query->whereHas('company', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search_company . '%');
            });
        }

        $bookings = $query->latest('booking_from')->paginate(20)->withQueryString();
        $drivers = Driver::orderBy('name')->get();
        $cars = Car::orderBy('plate_number')->get();
        $companies = Company::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();

        return view('reports.external-bookings', compact('bookings', 'drivers', 'cars', 'companies', 'customers'));
    }

    /**
     * Print internal booking for client
     */
    public function printInternalClient(Booking $booking): View
    {
        if ($booking->type !== 'internal') {
            abort(404);
        }

        $booking->load(['driver', 'car', 'fromLocation', 'toLocation']);

        return view('reports.print.internal-client', compact('booking'));
    }

    /**
     * Print internal booking for driver
     */
    public function printInternalDriver(Booking $booking): View
    {
        if ($booking->type !== 'internal') {
            abort(404);
        }

        $booking->load(['driver', 'car', 'fromLocation', 'toLocation']);

        return view('reports.print.internal-driver', compact('booking'));
    }

    /**
     * Print external booking for client
     */
    public function printExternalClient(Booking $booking): View
    {
        if ($booking->type !== 'external') {
            abort(404);
        }

        $booking->load(['driver', 'car', 'company', 'customer']);

        return view('reports.print.external-client', compact('booking'));
    }

    /**
     * Print external booking for driver
     */
    public function printExternalDriver(Booking $booking): View
    {
        if ($booking->type !== 'external') {
            abort(404);
        }

        $booking->load(['driver', 'car', 'company', 'customer']);

        return view('reports.print.external-driver', compact('booking'));
    }

    /**
     * Car financial report
     */
    public function carReport(Request $request): View
    {
        $cars = Car::orderBy('plate_number')->get();

        $selectedCar = null;
        $expenses = [];
        $internalBookings = [];
        $externalBookings = [];
        $statistics = null;

        if ($request->filled('car_id')) {
            $selectedCar = Car::find($request->car_id);

            if ($selectedCar) {
                // Get expenses for this car
                $expensesQuery = CarExpense::where('car_id', $selectedCar->id);

                // dd($expensesQuery->get());
                // Apply date filters if provided
                if ($request->filled('date_from')) {
                    $expensesQuery->whereDate('created_at', '>=', $request->date_from);
                }
                if ($request->filled('date_to')) {
                    $expensesQuery->whereDate('created_at', '<=', $request->date_to);
                }

                $expenses = $expensesQuery->latest()->get();

                // Get internal bookings for this car
                $internalQuery = Booking::where('car_id', $selectedCar->id)
                    ->where('type', 'internal');

                if ($request->filled('date_from')) {
                    $internalQuery->whereDate('booking_from', '>=', $request->date_from);
                }
                if ($request->filled('date_to')) {
                    $internalQuery->whereDate('booking_from', '<=', $request->date_to);
                }

                $internalBookings = $internalQuery->with(['driver', 'fromLocation', 'toLocation'])->latest('booking_from')->get();

                // Get external bookings for this car
                $externalQuery = Booking::where('car_id', $selectedCar->id)
                    ->where('type', 'external');

                if ($request->filled('date_from')) {
                    $externalQuery->whereDate('booking_from', '>=', $request->date_from);
                }
                if ($request->filled('date_to')) {
                    $externalQuery->whereDate('booking_from', '<=', $request->date_to);
                }

                $externalBookings = $externalQuery->with(['driver', 'company', 'customer'])->latest('booking_from')->get();

                // Calculate statistics
                $statistics = [
                    'total_expenses' => $expenses->sum('total_cost'),
                    'expense_count' => $expenses->count(),
                    'internal_revenue' => $internalBookings->sum('booking_price'),
                    'internal_count' => $internalBookings->count(),
                    'external_revenue' => $externalBookings->sum('booking_price'),
                    'external_count' => $externalBookings->count(),
                    'total_revenue' => $internalBookings->sum('booking_price') + $externalBookings->sum('booking_price'),
                    'net_profit' => ($internalBookings->sum('booking_price') + $externalBookings->sum('booking_price')) - $expenses->sum('cost'),
                ];
            }
        }

        return view('reports.car-report', compact(
            'cars',
            'selectedCar',
            'expenses',
            'internalBookings',
            'externalBookings',
            'statistics'
        ));
    }

    public function incomeExpenseReport(Request $request)
    {

        $request->validate([
            'from_date' => 'nullable|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
        ]);

        // If no from_date/to_date in request, default to current month's start and end
        $from = $request->from_date
            ? Carbon::parse($request->from_date)->startOfDay()
            : Carbon::now()->startOfMonth()->startOfDay();
        $to = $request->to_date
            ? Carbon::parse($request->to_date)->endOfDay()
            : Carbon::now()->endOfMonth()->endOfDay();

        // === INCOMES ===
        $incomeFromTable = Income::whereBetween('created_at', [$from, $to])->sum('amount');

        $incomeFromCashBookings = Booking::where('payment_type', 'cash')
            ->whereBetween('booking_from', [$from, $to])
            ->sum('booking_price');

        $totalIncome = $incomeFromTable + $incomeFromCashBookings;

        // === EXPENSES ===
        $salaries = DriverSalary::whereBetween('from_date', [$from, $to])
            ->orWhereBetween('to_date', [$from, $to])
            ->sum('salary'); // uses the getTotalAttribute()

        $carExpenses = CarExpense::whereBetween('created_at', [$from, $to])->sum('total_cost');

        $generalExpenses = Expense::whereBetween('created_at', [$from, $to])->sum('amount');

        $totalExpenses = $salaries + $carExpenses + $generalExpenses;

        // === NET PROFIT ===
        $netProfit = $totalIncome - $totalExpenses;

        return view('reports.income-expense', compact(
            'from',
            'to',
            'totalIncome',
            'incomeFromTable',
            'incomeFromCashBookings',
            'totalExpenses',
            'salaries',
            'carExpenses',
            'generalExpenses',
            'netProfit'
        ));
    }
}
