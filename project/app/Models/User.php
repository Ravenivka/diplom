<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
   
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
        'onDesc',
        'address',
        'phone',
        'avatar'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
   
}
