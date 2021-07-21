<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    use HasFactory;

    protected $table = 'imagens';

    protected $fillable = [
        'path_imagem',
    ];

    protected $hidden = [
        'id',
        'codigo_produto',
        'cadastrado_em',
    ];

    protected $casts = [
        'cadastrado_em'=>'datetime',
    ];
}
