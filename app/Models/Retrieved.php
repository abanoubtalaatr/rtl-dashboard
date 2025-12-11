<?php

// app/Models/Retrieved.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retrieved extends Model
{
    protected $fillable = [
        'description',
        'room_number',
        'currency_id',
        'date',
        'amount',
        'booking_id',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class); // أو ExternalBooking حسب اسم المودل
    }
}
