<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Company;
use App\Models\Customer;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Handle the incoming dashboard request.
     */
    public function __invoke()
    {
        $stats = [
            'cars' => Car::count(),
            'customers' => Customer::count(),
            'internal_bookings' => Booking::where('type', 'internal')->count(),
            'external_bookings' => Booking::where('type', 'external')->count(),
            'users' => User::count(),
            'clients' => Customer::count(),
            'companies' => Company::count(),
        ];

        // Get greeting based on time of day
        $hour = now()->format('H');
        $greeting = match (true) {
            $hour >= 5 && $hour < 12 => 'صباح الخير',
            $hour >= 12 && $hour < 17 => 'مساء الخير',
            $hour >= 17 && $hour < 21 => 'مساء الخير',
            default => 'مساء الخير'
        };

        return view('dashboard.index', compact('stats', 'greeting'));
    }
}
