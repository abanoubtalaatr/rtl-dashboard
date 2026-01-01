<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'customer_id',
        'company_id',
        'driver_id',
        'car_id',
        'car_type_id',
        'room_name',
        'number_of_people',
        'booking_from',
        'booking_to',
        'trip_duration',
        'cost',
        'booking_price',
        'currency_id',
        'payment_type',
        'return_driver_id',
        'return_time',
        'return_duration_minutes',
        'departure_from_location_id',
        'departure_to_location_id',
        'return_from_location_id',
        'return_to_location_id',
        'departure_from',
        'departure_to',
        'return_from',
        'return_to',
        'departure_route',
        'return_route',
        'created_by',
        'returned',
        'returned_at',
        'return_car_id',
        'has_return',
        'supervisor_id',
        'commission_for_driver',
        'on_phone',
        'external_location_id_departure',
        'external_location_id_return',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'booking_from' => 'datetime',
        'booking_to' => 'datetime',
        'cost' => 'decimal:2',
        'booking_price' => 'decimal:2',
        'return_time' => 'datetime',
        'returned' => 'boolean',
        'returned_at' => 'datetime',
    ];

    /**
     * Get the customer that owns the booking.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the company that owns the booking.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the driver that owns the booking.
     */
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    /**
     * Get the currency that owns the booking.
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * Get the car that owns the booking.
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    /**
     * Get the car type that owns the booking.
     */
    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    /**
     * Get the return driver for the booking.
     */
    public function returnDriver(): BelongsTo
    {
        return $this->belongsTo(Driver::class, 'return_driver_id');
    }

    /**
     * Get the departure from location.
     */
    public function departureFromLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'departure_from_location_id');
    }

    /**
     * Get the departure to location.
     */
    public function departureToLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'departure_to_location_id');
    }

    /**
     * Get the return from location.
     */
    public function returnFromLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'return_from_location_id');
    }

    /**
     * Get the return to location.
     */
    public function returnToLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'return_to_location_id');
    }

    /**
     * Get the user who created the booking.
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Alias for departureFromLocation (for reports).
     */
    public function fromLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'departure_from_location_id');
    }

    /**
     * Alias for departureToLocation (for reports).
     */
    public function toLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'departure_to_location_id');
    }

    /**
     * Get type options.
     */
    public static function getTypeOptions(): array
    {
        return [
            'internal' => 'داخلي',
            'external' => 'خارجي',
        ];
    }

    /**
     * Get payment type options.
     */
    public static function getPaymentTypeOptions(): array
    {
        return [
            'cash' => 'كاش',
            'visa' => 'فيزا',
            'credit' => 'أجل',
            'rooms' => 'غرف',
            'free' => 'فري',
        ];
    }

    /**
     * Get the Arabic type label.
     */
    public function getTypeLabelAttribute(): string
    {
        $types = self::getTypeOptions();

        return $types[$this->type] ?? $this->type;
    }

    /**
     * Get the Arabic payment type label.
     */
    public function getPaymentTypeLabelAttribute(): string
    {
        $types = self::getPaymentTypeOptions();

        return $types[$this->payment_type] ?? $this->payment_type;
    }

    /**
     * Get date accessor (from booking_from).
     */
    public function getDateAttribute()
    {
        return $this->booking_from ? $this->booking_from->startOfDay() : null;
    }

    /**
     * Get time accessor (from booking_from).
     */
    public function getTimeAttribute()
    {
        return $this->booking_from ? $this->booking_from->format('H:i') : null;
    }

    /**
     * Get price accessor (from booking_price).
     */
    public function getPriceAttribute()
    {
        return $this->booking_price;
    }

    /**
     * Get notes accessor (returns empty string if not set).
     */
    public function getNotesAttribute()
    {
        return $this->attributes['notes'] ?? '';
    }

    /**
     * Scope a query to only include internal bookings.
     */
    public function scopeInternal($query)
    {
        return $query->where('type', 'internal');
    }

    /**
     * Scope a query to only include external bookings.
     */
    public function scopeExternal($query)
    {
        return $query->where('type', 'external');
    }

    /**
     * Scope a query to only include returned bookings.
     */
    public function scopeReturned($query)
    {
        return $query->where('returned', true);
    }

    /**
     * Scope a query to only include unreturned internal bookings.
     * - If has_return = true  → return trip (booking_to) is in the future
     * - If has_return = false → outbound trip (booking_from) is in the past
     */
    public function scopeUnreturned($query)
    {
        return $query->where(function ($q) {
            // Case 1: Bookings WITH return → return time still in the future
            $q->where('has_return', true)
                ->where('returned', false)
                ->where('booking_to', '>', now());
        })->orWhere(function ($q) {
            // Case 2: Bookings WITHOUT return → outbound has started AND not manually returned
            $q->where('has_return', true)
                ->where('returned', false)
                ->where('booking_from', '<=', now());  // ← Fixed: started already
        });
    }

    /**
     * Mark the booking as returned.
     */
    public function markAsReturned(): bool
    {
        return $this->update([
            'returned' => true,
            'returned_at' => now(),
        ]);
    }

    /**
     * Mark the booking as not returned.
     */
    public function markAsNotReturned(): bool
    {
        return $this->update([
            'returned' => false,
            'returned_at' => null,
        ]);
    }

    /**
     * Get the return car for the booking.
     */
    public function returnCar(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'return_car_id');
    }

    /**
     * Get the supervisor for the booking.
     */
    public function supervisor(): BelongsTo
    {
        return $this->belongsTo(Supervisor::class, 'supervisor_id');
    }

    /**
     * Get the external location for the departure.
     */
    public function externalLocationDeparture(): BelongsTo
    {
        return $this->belongsTo(ExternalLocation::class, 'external_location_id_departure');
    }

    /**
     * Get the external location for the return.
     */
    public function externalLocationReturn(): BelongsTo
    {
        return $this->belongsTo(ExternalLocation::class, 'external_location_id_return');
    }
}
