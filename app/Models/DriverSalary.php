<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DriverSalary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'driver_id',
        'salary',
        'from_date',
        'to_date',
        'advance',
        'discount',
        'commission',
        'number_of_days',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
        'salary' => 'decimal:2',
        'advance' => 'decimal:2',
        'discount' => 'decimal:2',
        'commission' => 'decimal:2',
    ];

    /**
     * Get the driver associated with this salary.
     */
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    /**
     * Get number of days dynamically between from_date and to_date (inclusive).
     */
    public function getDaysAttribute(): ?int
    {
        if (! $this->from_date || ! $this->to_date) {
            return null;
        }

        return $this->from_date->diffInDays($this->to_date) + 1;
    }

    /**
     * Get the total payable amount (salary + commission - advance - discount).
     */
    public function getTotalAttribute(): float
    {
        return (float) $this->salary + (float) $this->commission - (float) $this->advance - (float) $this->discount;
    }
}
