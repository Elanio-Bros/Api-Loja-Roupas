<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $table = 'historico';

    protected $fillable = [
        'categoria',
        'nome',
        'preço',
        'confecção',
        'tamanho',
        'quantidade'

    ];

    protected $hidden = [
        'codigo_produto',
        'cadastrado_em',
    ];

    protected $casts = [
        'cadastrado_em' => 'datetime',
    ];

    
}
