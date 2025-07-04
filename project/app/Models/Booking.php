<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model 
{
        protected $fillable = [        
        'id',
        'user_id',
        'composition',
        'time_creation',
        'time_modification',
        'status',
        'address',
        'paid',
        'pay_method',
        'phone',
        'email',
        'amount'
    ];
}
