<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['type', 'description', 'amount'];

    protected $casts = [
        'amount' => 'decimal:2',
    ];
}
