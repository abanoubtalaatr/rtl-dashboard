<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Car;
use App\Models\CarType;
use App\Models\Company;
use App\Models\Currency;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Seeder;

class InternalBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get required data
        $drivers = Driver::all();
        $cars = Car::all();
        $carTypes = CarType::all();
        $currencies = Currency::all();
        $companies = Company::all();
        $users = User::all();

        // Check if we have the necessary data
        if ($drivers->isEmpty() || $cars->isEmpty() || $carTypes->isEmpty() || $currencies->isEmpty() || $companies->isEmpty()) {
            $this->command->error('Please run DriverSeeder, CarTypeSeeder, CompanySeeder, and create cars first!');

            return;
        }

        $driver = $drivers->first();
        $car = $cars->first();
        $carType = $carTypes->first();
        $currency = $currencies->first();
        $company = $companies->first();
        $user = $users->first();

        // Create sample internal bookings
        $bookings = [
            [
                'type' => 'internal',
                'room_name' => '101',
                'number_of_people' => 15,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->subDays(5)->setHour(8)->setMinute(0),
                'booking_to' => now()->subDays(5)->setHour(18)->setMinute(0),
                'trip_duration' => 40,
                'return_duration_minutes' => 40,
                'departure_from' => 'فندق النيل',
                'departure_to' => 'الأهرامات',
                'return_from' => 'الأهرامات',
                'return_to' => 'فندق النيل',
                'cost' => 500,
                'booking_price' => 800,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'cash',
                'created_by' => $user->id,
                'returned' => true,
                'returned_at' => now()->subDays(5)->setHour(19)->setMinute(0),
            ],
            [
                'type' => 'internal',
                'room_name' => '205',
                'number_of_people' => 25,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->subDays(3)->setHour(9)->setMinute(0),
                'booking_to' => now()->subDays(3)->setHour(17)->setMinute(0),
                'trip_duration' => 45,
                'return_duration_minutes' => 45,
                'departure_from' => 'فندق ماريوت',
                'departure_to' => 'المتحف المصري',
                'return_from' => 'المتحف المصري',
                'return_to' => 'فندق ماريوت',
                'cost' => 600,
                'booking_price' => 900,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'visa',
                'created_by' => $user->id,
                'returned' => false,
                'returned_at' => null,
            ],
            [
                'type' => 'internal',
                'room_name' => '312',
                'number_of_people' => 10,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->addDays(1)->setHour(10)->setMinute(0),
                'booking_to' => now()->addDays(1)->setHour(16)->setMinute(0),
                'trip_duration' => 30,
                'return_duration_minutes' => 30,
                'departure_from' => 'فندق هيلتون',
                'departure_to' => 'خان الخليلي',
                'return_from' => 'خان الخليلي',
                'return_to' => 'فندق هيلتون',
                'cost' => 400,
                'booking_price' => 700,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'cash',
                'created_by' => $user->id,
                'returned' => false,
                'returned_at' => null,
            ],
            [
                'type' => 'internal',
                'room_name' => '408',
                'number_of_people' => 20,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->subDays(1)->setHour(7)->setMinute(30),
                'booking_to' => now()->subDays(1)->setHour(19)->setMinute(0),
                'trip_duration' => 60,
                'return_duration_minutes' => 60,
                'departure_from' => 'فندق الفورسيزون',
                'departure_to' => 'الإسكندرية',
                'return_from' => 'الإسكندرية',
                'return_to' => 'فندق الفورسيزون',
                'cost' => 1200,
                'booking_price' => 1800,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'credit',
                'created_by' => $user->id,
                'returned' => false,
                'returned_at' => null,
            ],
            [
                'type' => 'internal',
                'room_name' => '501',
                'number_of_people' => 12,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->addHours(3),
                'booking_to' => now()->addHours(8),
                'trip_duration' => 45,
                'return_duration_minutes' => 45,
                'departure_from' => 'فندق كمبنسكي',
                'departure_to' => 'القرية الذكية',
                'return_from' => 'القرية الذكية',
                'return_to' => 'فندق كمبنسكي',
                'cost' => 550,
                'booking_price' => 850,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'visa',
                'created_by' => $user->id,
                'returned' => false,
                'returned_at' => null,
            ],
        ];

        foreach ($bookings as $bookingData) {
            Booking::create($bookingData);
        }

        $this->command->info('Created '.count($bookings).' internal bookings!');
        $this->command->info('- '.count(array_filter($bookings, fn ($b) => $b['returned'])).' returned bookings');
        $this->command->info('- '.count(array_filter($bookings, fn ($b) => ! $b['returned'])).' unreturned bookings');
    }
}
