<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    use HasFactory;

    protected $table = 'imagens';

    public $timestamps = false;

    protected $fillable = [
        'ref_codigo_produto',
        'path_imagem',
    ];

    protected $hidden = [
        'cadastrado_em',
    ];

    protected $casts = [
        'cadastrado_em' => 'datetime',
    ];
}
