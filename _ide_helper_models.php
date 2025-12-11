<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $type
 * @property bool $returned
 * @property \Illuminate\Support\Carbon|null $returned_at
 * @property int|null $customer_id
 * @property string|null $room_name
 * @property int $number_of_people
 * @property string|null $departure_from Departure from location
 * @property string|null $departure_to Departure to location
 * @property int|null $departure_from_location_id
 * @property int|null $departure_to_location_id
 * @property int|null $company_id
 * @property int $driver_id
 * @property int|null $return_driver_id
 * @property int|null $car_id
 * @property int|null $car_type_id
 * @property \Illuminate\Support\Carbon $booking_from
 * @property int|null $trip_duration Trip duration in minutes
 * @property \Illuminate\Support\Carbon $booking_to
 * @property \Illuminate\Support\Carbon|null $return_time
 * @property int|null $return_duration_minutes
 * @property string|null $return_from Return from location
 * @property string|null $return_to Return to location
 * @property string|null $departure_route From - To route text (legacy)
 * @property string|null $return_route Return route text (legacy)
 * @property int|null $return_from_location_id
 * @property int|null $return_to_location_id
 * @property numeric $cost
 * @property numeric $booking_price
 * @property string $payment_type
 * @property int $currency_id
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Car|null $car
 * @property-read \App\Models\CarType|null $carType
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\Currency $currency
 * @property-read \App\Models\Customer|null $customer
 * @property-read \App\Models\Location|null $departureFromLocation
 * @property-read \App\Models\Location|null $departureToLocation
 * @property-read \App\Models\Driver $driver
 * @property-read \App\Models\Location|null $fromLocation
 * @property-read mixed $date
 * @property-read mixed $notes
 * @property-read string $payment_type_label
 * @property-read mixed $price
 * @property-read mixed $time
 * @property-read string $type_label
 * @property-read \App\Models\Driver|null $returnDriver
 * @property-read \App\Models\Location|null $returnFromLocation
 * @property-read \App\Models\Location|null $returnToLocation
 * @property-read \App\Models\Location|null $toLocation
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking external()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking internal()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking returned()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking unreturned()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBookingFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBookingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBookingTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCarTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDepartureFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDepartureFromLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDepartureRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDepartureTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDepartureToLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereNumberOfPeople($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnDurationMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnFromLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnToLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturned($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereReturnedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereRoomName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereTripDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUpdatedAt($value)
 */
	class Booking extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $plate_number
 * @property string|null $model
 * @property string|null $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Booking> $bookings
 * @property-read int|null $bookings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CarExpense> $expenses
 * @property-read int|null $expenses_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car wherePlateNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Car whereUpdatedAt($value)
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $car_id
 * @property array<array-key, mixed> $type
 * @property string|null $description
 * @property numeric $cost
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Car $car
 * @property-read string $type_label
 * @property-read array $type_labels_array
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarExpense whereUpdatedAt($value)
 */
	class CarExpense extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Booking> $bookings
 * @property-read int|null $bookings_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CarType whereUpdatedAt($value)
 */
	class CarType extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $commercial_register
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereCommercialRegister($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property string $status
 * @property string $license_number
 * @property string|null $national_id
 * @property string|null $license_image
 * @property array<array-key, mixed>|null $national_images
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string|null $license_image_url
 * @property-read array<int, string> $national_images_urls
 * @property-read string $status_label
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DriverSalary> $salaries
 * @property-read int|null $salaries_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereLicenseImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereLicenseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereNationalImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Driver whereUpdatedAt($value)
 */
	class Driver extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $driver_id
 * @property numeric $salary
 * @property \Illuminate\Support\Carbon $from_date
 * @property \Illuminate\Support\Carbon $to_date
 * @property numeric $advance
 * @property numeric $discount
 * @property numeric $commission
 * @property int $number_of_days
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Driver $driver
 * @property-read int|null $days
 * @property-read float $total
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereAdvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereFromDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereNumberOfDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DriverSalary whereUpdatedAt($value)
 */
	class DriverSalary extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $type_label
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Location whereUpdatedAt($value)
 */
	class Location extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $description
 * @property string|null $room_number
 * @property int $currency_id
 * @property string $date
 * @property string $amount
 * @property int|null $booking_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Booking|null $booking
 * @property-read \App\Models\Currency $currency
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereRoomNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Retrieved whereUpdatedAt($value)
 */
	class Retrieved extends \Eloquent {}
}

namespace App\Models{
/**
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supervisor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supervisor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supervisor query()
 */
	class Supervisor extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Booking> $bookings
 * @property-read int|null $bookings_count
 * @property-read string $role_label
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

