<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usarios extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table='usuarios';

    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
    ];

    protected $hidden = [
        'password',
        'token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
