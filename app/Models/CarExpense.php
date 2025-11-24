<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarExpense extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_id',
        'type',
        'description',
        'cost',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'cost' => 'decimal:2',
    ];

    /**
     * Get the car that owns the expense.
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    /**
     * Get type options.
     */
    public static function getTypeOptions(): array
    {
        return [
            'fix' => 'إصلاح',
            'fuel' => 'وقود',
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
}
