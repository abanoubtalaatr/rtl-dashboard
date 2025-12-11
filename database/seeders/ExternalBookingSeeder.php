<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Car;
use App\Models\CarType;
use App\Models\Company;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Seeder;

class ExternalBookingSeeder extends Seeder
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
        $customers = Customer::all();
        $users = User::all();

        // Check if we have the necessary data
        if ($drivers->isEmpty() || $cars->isEmpty() || $carTypes->isEmpty() || $currencies->isEmpty() || $companies->isEmpty() || $customers->isEmpty()) {
            $this->command->error('Please run DriverSeeder, CustomerSeeder, CarTypeSeeder, CompanySeeder, and create cars first!');

            return;
        }

        $driver = $drivers->first();
        $car = $cars->first();
        $carType = $carTypes->first();
        $currency = $currencies->first();
        $company = $companies->first();
        $customer = $customers->first();
        $user = $users->first();

        // Create sample external bookings
        $bookings = [
            [
                'type' => 'external',
                'customer_id' => $customer->id,
                'number_of_people' => 20,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->subDays(7)->setHour(6)->setMinute(0),
                'booking_to' => now()->subDays(7)->setHour(20)->setMinute(0),
                'trip_duration' => 180,
                'return_duration_minutes' => 180,
                'departure_from' => 'القاهرة',
                'departure_to' => 'الأقصر',
                'return_from' => 'الأقصر',
                'return_to' => 'القاهرة',
                'cost' => 2500,
                'booking_price' => 4000,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'cash',
                'created_by' => $user->id,
                'returned' => true,
                'returned_at' => now()->subDays(7)->setHour(21)->setMinute(0),
            ],
            [
                'type' => 'external',
                'customer_id' => $customer->id,
                'number_of_people' => 35,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->subDays(2)->setHour(7)->setMinute(0),
                'booking_to' => now()->subDays(2)->setHour(19)->setMinute(0),
                'trip_duration' => 120,
                'return_duration_minutes' => 120,
                'departure_from' => 'القاهرة',
                'departure_to' => 'الإسكندرية',
                'return_from' => 'الإسكندرية',
                'return_to' => 'القاهرة',
                'cost' => 1800,
                'booking_price' => 2800,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'visa',
                'created_by' => $user->id,
                'returned' => false,
                'returned_at' => null,
            ],
            [
                'type' => 'external',
                'customer_id' => $customer->id,
                'number_of_people' => 45,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->addDays(2)->setHour(8)->setMinute(0),
                'booking_to' => now()->addDays(2)->setHour(18)->setMinute(0),
                'trip_duration' => 90,
                'return_duration_minutes' => 90,
                'departure_from' => 'القاهرة',
                'departure_to' => 'شرم الشيخ',
                'return_from' => 'شرم الشيخ',
                'return_to' => 'القاهرة',
                'cost' => 3000,
                'booking_price' => 4500,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'credit',
                'created_by' => $user->id,
                'returned' => false,
                'returned_at' => null,
            ],
            [
                'type' => 'external',
                'customer_id' => $customer->id,
                'number_of_people' => 25,
                'driver_id' => $driver->id,
                'return_driver_id' => $driver->id,
                'car_id' => $car->id,
                'car_type_id' => $carType->id,
                'booking_from' => now()->subHours(5),
                'booking_to' => now()->addHours(3),
                'trip_duration' => 60,
                'return_duration_minutes' => 60,
                'departure_from' => 'القاهرة',
                'departure_to' => 'الجيزة',
                'return_from' => 'الجيزة',
                'return_to' => 'القاهرة',
                'cost' => 800,
                'booking_price' => 1200,
                'currency_id' => $currency->id,
                'company_id' => $company->id,
                'payment_type' => 'cash',
                'created_by' => $user->id,
                'returned' => false,
                'returned_at' => null,
            ],
        ];

        foreach ($bookings as $bookingData) {
            Booking::create($bookingData);
        }

        $this->command->info('Created '.count($bookings).' external bookings!');
        $this->command->info('- '.count(array_filter($bookings, fn ($b) => $b['returned'])).' returned bookings');
        $this->command->info('- '.count(array_filter($bookings, fn ($b) => ! $b['returned'])).' unreturned bookings');
    }
}
