<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'mobile',
        'status',
        'license_number',
        'license_image',
        'national_id',
        'national_images',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'national_images' => 'array',
    ];

    /**
     * Get all salary records for the driver.
     */
    public function salaries()
    {
        return $this->hasMany(DriverSalary::class);
    }

    /**
     * Get the license image URL.
     */
    public function getLicenseImageUrlAttribute(): ?string
    {
        if ($this->license_image) {
            return asset('storage/'.$this->license_image);
        }

        return null;
    }

    /**
     * Get national ID images URLs.
     *
     * @return array<int, string>
     */
    public function getNationalImagesUrlsAttribute(): array
    {
        if (! is_array($this->national_images) || empty($this->national_images)) {
            return [];
        }

        return array_map(function (string $path): string {
            return asset('storage/'.$path);
        }, $this->national_images);
    }

    /**
     * Get status options.
     */
    public static function getStatusOptions(): array
    {
        return [
            'on_break' => 'في الاستراحة',
            'in_operation' => 'في التشغيل',
        ];
    }

    /**
     * Get the Arabic status label.
     */
    public function getStatusLabelAttribute(): string
    {
        $statuses = self::getStatusOptions();

        return $statuses[$this->status] ?? $this->status;
    }
}
