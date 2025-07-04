<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
        protected $fillable = [        
        'id',
        'name',
        'desc',
        'price',
        'new',
        'src'
    ];
}
