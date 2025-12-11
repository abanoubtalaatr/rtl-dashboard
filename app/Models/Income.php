<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['name', 'description', 'amount'];

    protected $casts = [
        'amount' => 'decimal:2',
    ];
}