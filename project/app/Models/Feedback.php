<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [        
        'id',
        'user_id',
        'text',
        
    ];
}
