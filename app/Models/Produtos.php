<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public $timestamps = false;

    protected $fillable = [
        'categoria',
        'nome',
        'preço',
        'confecção',
        'tamanho',
        'quantidade_produtos'

    ];

    protected $hidden = [
        'codigo_produto',
        'cadastrado_em',
    ];

    protected $casts = [
        'cadastrado_em' => 'datetime',
    ];
}
