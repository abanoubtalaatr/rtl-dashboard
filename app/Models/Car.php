<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'plate_number',
        'model',
        'color',
        'car_type_id',
    ];

    /**
     * Get the expenses for the car.
     */
    public function expenses(): HasMany
    {
        return $this->hasMany(CarExpense::class);
    }

    /**
     * Get the bookings for the car.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Check if car is available in a given time range.
     * A car is available if it has no bookings that overlap with the requested time range.
     */
    public function isAvailable($from, $to): bool
    {
        // Check if there are any bookings that overlap with the requested time range
        // A booking overlaps if: booking_from < requested_to AND booking_to > requested_from
        $hasOverlappingBooking = $this->bookings()
            ->where(function ($query) use ($from, $to) {
                $query->where('booking_from', '<', $to)
                    ->where('booking_to', '>', $from);
            })
            ->exists();

        // Car is available if there are no overlapping bookings
        return ! $hasOverlappingBooking;
    }

    /**
     * Get the car type that owns the car.
     */
    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }
}
