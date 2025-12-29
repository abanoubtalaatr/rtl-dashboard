<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Check if user is super admin.
     */
    public function isSuperAdmin(): bool
    {
        return in_array($this->email, ['nagy@admin.com', 'abanoub@admin.com']);
    }

    /**
     * Check if user is admin.
     */
    public function isAdmin(): bool
    {
        return in_array($this->email, ['nagy@admin.com', 'abanoub@admin.com', 'amr@admin.com','mramr@admin.com']);
    }

    /**
     * Get role options with Arabic labels.
     */
    public static function getRoleOptions(): array
    {
        return [
            'user' => 'مستخدم عادي',
            'admin' => 'مدير',
            'super_admin' => 'مدير عام (Super Admin)',
        ];
    }

    /**
     * Get the Arabic role label.
     */
    public function getRoleLabelAttribute(): string
    {
        $roles = self::getRoleOptions();

        return $roles[$this->role] ?? $this->role;
    }

    /**
     * Get bookings created by this user.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'created_by');
    }

    public function supervisor()
    {
        return $this->hasOne(Supervisor::class);
    }

    public function createdBookings()
    {
        return $this->hasMany(Booking::class, 'created_by');
    }
}
