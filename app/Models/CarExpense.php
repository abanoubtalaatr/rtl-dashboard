<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarExpense extends Model
{
    // App\Models\CarExpense.php
    protected $fillable = [
        'car_id',
        'items',
        'description',
        'total_cost', // الآن آمن تمامًا
    ];

    protected $casts = [
        'items' => 'array',
        'total_cost' => 'decimal:2',
    ];

    // App\Models\CarExpense.php

    protected static function booted()
    {
        static::saving(function ($expense) {
            if (is_array($expense->items)) {
                $expense->total_cost = collect($expense->items)
                    ->sum(fn ($item) => (float) ($item['cost'] ?? 0));
            } else {
                $expense->total_cost = 0;
            }
        });
    }

    // احذف الـ accessor إذا أردت (لأن العمود موجود الآن)
    // أو اتركه كـ fallback
    public function getTotalCostAttribute($value)
    {
        if ($value !== null) {
            return (float) $value;
        }

        return collect($this->items)->sum(fn ($item) => (float) ($item['cost'] ?? 0));
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    public static function typeOptions(): array
    {
        return [
            'fuel' => 'وقود',
            'spare_parts' => 'قطع غيار',
            'oil_change' => 'غيار زيت',
            'maintenance' => 'صيانة',
            'expense_traffic' => 'مصاريف مرورية',
            'traffic_fees' => 'كرتات مرورية',
            'laundry' => 'غسيل',
        ];
    }

    public function getTypeLabelsAttribute(): string
    {
        if (empty($this->items)) {
            return '-';
        }

        return collect($this->items)
            ->pluck('type')
            ->map(fn ($key) => self::typeOptions()[$key] ?? $key)
            ->implode('، ');
    }
    public static function translateType($type)
    {
        return match($type) {
            'fuel' => 'وقود',
            'spare_parts' => 'قطع غيار',
            'oil_change' => 'غيار زيت',
            'maintenance' => 'صيانة',
            'expense_traffic' => 'مصاريف مرورية',
            'traffic_fees' => 'كرتات مرورية',
            'laundry' => 'غسيل',
        };
    }
}
