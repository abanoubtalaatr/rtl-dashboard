<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarExpenseController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ExternalBookingController;
use App\Http\Controllers\InternalBookingController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // Registration Routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

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

    // External Bookings Resource Routes (الحجز الخارجي)
    Route::resource('external-bookings', ExternalBookingController::class);

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
});
