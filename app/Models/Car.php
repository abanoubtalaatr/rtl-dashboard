<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Car extends Model
{
    protected $fillable = [
        'plate_number',
        'model',
        'color',
        'car_type_id',
        'status',
        'status_notes',
        'status_updated_at',
    ];

    protected $casts = [
        'status_updated_at' => 'datetime',
    ];

    /**
     * Get status options with Arabic labels
     */
    public static function getStatusOptions(): array
    {
        return [
            'parking' => 'في الجراج',
            'rest' => 'في الراحة',
            'traffic' => 'في المرور',
            'maintenance' => 'في الصيانة',
            'working' => 'ف تشغيلة',
        ];
    }

    /**
     * Get status badge color
     */
    public static function getStatusColor(string $status = null): string
    {
        return match ($status) {
            'parking' => 'secondary',
            'rest' => 'info',
            'traffic' => 'warning',
            'maintenance' => 'danger',
            'working' => 'success',
            default => 'secondary',
        };
    }

    /**
     * Get status icon
     */
    public static function getStatusIcon(string $status = null): string
    {
        return match ($status) {
            'parking' => 'fa-parking',
            'rest' => 'fa-bed',
            'traffic' => 'fa-road',
            'maintenance' => 'fa-wrench',
            'working' => 'fa-cog',
            default => 'fa-car',
        };
    }

    /**
     * Get Arabic status label
     */
    public function getStatusLabelAttribute(): string
    {
        $statuses = self::getStatusOptions();
        $status = $this->getCurrentStatus();
        return $statuses[$status] ?? $status ?? 'في الجراج';
    }

    /**
     * Get status badge HTML
     */
    public function getStatusBadgeAttribute(): string
    {
        $color = self::getStatusColor($this->status);
        $icon = self::getStatusIcon($this->status);
        return sprintf(
            '<span class="badge badge-%s"><i class="fas %s mr-1"></i>%s</span>',
            $color,
            $icon,
            $this->status_label
        );
    }

    /**
     * Update car status
     */
    public function updateStatus(string $status, ?string $notes = null): bool
    {
        return $this->update([
            'status' => $status,
            'status_notes' => $notes,
            'status_updated_at' => now(),
        ]);
    }

    /**
     * Check if car is available in a given time range
     */
    public function isAvailable($from, $to): bool
    {
        // Car must not be in maintenance
        if ($this->status === 'maintenance') {
            return false;
        }

        // Check if there are any bookings that overlap
        $hasOverlappingBooking = $this->bookings()
            ->where(function ($query) use ($from, $to) {
                $query->where('booking_from', '<', $to)
                    ->where('booking_to', '>', $from);
            })
            ->exists();

        return !$hasOverlappingBooking;
    }

    /**
     * Relationships
     */
    public function expenses(): HasMany
    {
        return $this->hasMany(CarExpense::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    //latest booking 
    public function latestBooking(): BelongsTo
    {
        return $this->belongsTo(Booking::class)->latest();
    }
    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    //latest return booking
    public function latestReturnBooking(): BelongsTo
    {
        return $this->belongsTo(Booking::class)->latest()->where('has_return', true);
    }

    /**
     * Get current real-time status based on active bookings (departure or return)
     */
    public function getCurrentStatus(): string
    {
        
        $from = Carbon::now();
        $to = $from->addMinutes((int)$this->trip_duration ?? 0);

        $hasActiveBooking = Booking::where(function ($query) use ($from, $to) {
            $query->where('booking_from', '<=', $from)
                ->where('booking_to', '>=', $to);
        })
            ->where(function ($query) {
                $query->where('car_id', $this->id)
                    ->orWhere('return_car_id', $this->id);
            })->latest()
            ->exists();

        return $hasActiveBooking ? 'working' : ($this->status ?? 'parking');
    }
}
