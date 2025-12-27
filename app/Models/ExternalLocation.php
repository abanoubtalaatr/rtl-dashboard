<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExternalLocation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type',
        'address',
    ];

    /**
     * Get type options.
     */
    public static function getTypeOptions(): array
    {
        return [
            'hotel' => 'فندق',
            'landmark' => 'معلم سياحي',
            'airport' => 'مطار',
            'other' => 'أخرى',
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
