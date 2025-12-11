<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RetrievedController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CarExpenseController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\DriverSalaryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ExternalBookingController;
use App\Http\Controllers\InternalBookingController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // Password Reset Routes
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('home', DashboardController::class)->name('home');

    // API endpoint for car availability check
    Route::post('api/check-car-availability', [\App\Http\Controllers\Api\CarAvailabilityController::class, 'check']);

    // Drivers Resource Routes
    Route::resource('drivers', DriverController::class);

    // Customers Resource Routes
    Route::resource('customers', CustomerController::class);

    // Companies Resource Routes
    Route::resource('companies', CompanyController::class);

    // Currencies Resource Routes
    Route::resource('currencies', CurrencyController::class);

    // Old Bookings Resource Routes (للحفاظ على التوافقية)
    Route::resource('bookings', BookingController::class);

    // Internal Bookings Resource Routes (الحجز الداخلي)
    Route::resource('internal-bookings', InternalBookingController::class);
    Route::post('internal-bookings/{internalBooking}/toggle-return', [InternalBookingController::class, 'toggleReturn'])->name('internal-bookings.toggle-return');
    Route::get('internal-bookings-unreturned', [InternalBookingController::class, 'unreturned'])->name('internal-bookings.unreturned');

    // External Bookings Resource Routes (الحجز الخارجي)
    Route::resource('external-bookings', ExternalBookingController::class);
    Route::post('external-bookings/{externalBooking}/toggle-return', [ExternalBookingController::class, 'toggleReturn'])->name('external-bookings.toggle-return');
    Route::get('external-bookings-unreturned', [ExternalBookingController::class, 'unreturned'])->name('external-bookings.unreturned');

    // Car Types Resource Routes
    Route::resource('car-types', CarTypeController::class);

    // Locations Resource Routes (للتشغيلات)
    Route::resource('locations', LocationController::class);

    // Cars Resource Routes
    Route::resource('cars', CarController::class);
    Route::get('availability', [CarController::class, 'availability'])->name('cars.availability');

    // Car Expenses Resource Routes
    Route::resource('car-expenses', CarExpenseController::class);

    // Users Resource Routes
    Route::resource('users', UserController::class);

    // Driver Salaries Resource Routes
    Route::resource('retrieveds', RetrievedController::class);
    Route::resource('supervisors', SupervisorController::class)->except(['show']);
    Route::resource('settings', SettingController::class)->only(['index', 'update']);
    // 1. الرواتب الخاصة بسائق معين (nested resource)
    Route::prefix('drivers/{driver}')->name('drivers.')->group(function () {

        Route::get('salaries', [DriverSalaryController::class, 'index'])
            ->name('salaries.index');

        Route::get('salaries/create', [DriverSalaryController::class, 'create'])
            ->name('salaries.create');

        Route::post('salaries', [DriverSalaryController::class, 'store'])
            ->name('salaries.store');

        Route::get('salaries/{salary}/edit', [DriverSalaryController::class, 'edit'])
            ->name('salaries.edit');

        Route::put('salaries/{salary}', [DriverSalaryController::class, 'update'])
            ->name('salaries.update');

        Route::delete('salaries/{salary}', [DriverSalaryController::class, 'destroy'])
            ->name('salaries.destroy');
    });

    Route::get('/bookings-search', [App\Http\Controllers\BookingController::class, 'search'])
        ->name('bookings.search');

    // Reports Routes (Super Admin Only)
    Route::middleware('super_admin')->prefix('reports')->name('reports.')->group(function () {
        // Internal Bookings Reports
        Route::get('internal-bookings', [App\Http\Controllers\ReportController::class, 'internalBookings'])->name('internal-bookings');
        Route::get('internal-bookings/{booking}/print-client', [App\Http\Controllers\ReportController::class, 'printInternalClient'])->name('internal.print-client');
        Route::get('internal-bookings/{booking}/print-driver', [App\Http\Controllers\ReportController::class, 'printInternalDriver'])->name('internal.print-driver');

        // External Bookings Reports
        Route::get('external-bookings', [App\Http\Controllers\ReportController::class, 'externalBookings'])->name('external-bookings');
        Route::get('external-bookings/{booking}/print-client', [App\Http\Controllers\ReportController::class, 'printExternalClient'])->name('external.print-client');
        Route::get('external-bookings/{booking}/print-driver', [App\Http\Controllers\ReportController::class, 'printExternalDriver'])->name('external.print-driver');

        // Car Financial Report
        Route::get('car-report', [App\Http\Controllers\ReportController::class, 'carReport'])->name('car-report');

        Route::get('users-bookings', [App\Http\Controllers\ReportController::class, 'usersBookings'])
            ->name('reports.users-bookings');

        Route::resource('expenses', ExpenseController::class);
        Route::resource('incomes', IncomeController::class);

        Route::get('income-expense-reports', [App\Http\Controllers\ReportController::class, 'incomeExpenseReport'])->name('income-expense-reports');
    });
});
