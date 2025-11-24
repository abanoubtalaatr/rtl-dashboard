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
}
