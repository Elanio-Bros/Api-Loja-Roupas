<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'categoria',
        'nome',
        'preço',
        'confecção',
        'tamanho',
        'quantidade'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'codigo_produto',
        'cadastrado_em',
    ];

    protected $casts = [
        'cadastrado_em'=>'datetime',
    ];
}
