<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'type', 'description'];

    // Automatically cast boolean values
    protected function value(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                return match ($this->type) {
                    'boolean' => (bool) $value,
                    'number'  => is_numeric($value) ? $value + 0 : $value,
                    'json'    => $value ? json_decode($value, true) : null,
                    default   => $value,
                };
            },
            set: function ($value) {
                return match ($this->type) {
                    'boolean' => $value ? '1' : '0',
                    'json'    => is_array($value) ? json_encode($value) : $value,
                    default   => $value,
                };
            }
        );
    }

    // Helper: Get setting('key')
    public static function get(string $key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting?->value ?? $default;
    }

    public static function set(string $key, $value)
    {
        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => gettype($value) === 'boolean' ? 'boolean' : 'string']
        );
    }
}