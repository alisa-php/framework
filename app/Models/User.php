<?php

namespace App\Models;

use Framework\Database\Models\Auth;

class User extends Auth
{
    protected $fillable = [
        'id',
        'is_guest',
        'options',
    ];

    protected $casts = [
        'options' => 'array',
    ];
}