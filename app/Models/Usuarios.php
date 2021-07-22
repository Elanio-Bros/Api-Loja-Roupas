<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    public $timestamps=false;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'api_token',
    ];

    protected $hidden = [
        'senha',
        'api_token',
    ];

    protected $casts = [
        'data_token' => 'datetime',
    ];
}
