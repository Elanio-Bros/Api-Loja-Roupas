<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public $timestamps = false;
    protected $primaryKey = 'codigo_produto';

    protected $fillable = [
        'codigo_produto',
        'categoria',
        'nome',
        'preço',
        'confecção',
        'tamanho',
        'quantidade_produtos'

    ];

    protected $hidden = [
        'cadastrado_em',
    ];

    protected $casts = [
        'cadastrado_em' => 'datetime',
    ];

    public function imagens()
    {
        return $this->hasMany(Imagens::class, 'ref_codigo_produto', 'codigo_produto');
    }
}
