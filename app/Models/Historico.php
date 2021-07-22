<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $table = 'historico';

    public $timestamps = false;

    protected $fillable = [
        'criado_por',
        'ref_codigo_produto',
        'modificação',
        'quantidade',

    ];

    protected $hidden = [
        'cadastrado_em',
    ];

    protected $casts = [
        'cadastrado_em' => 'datetime',
    ];

    public function usuario()
    {
        return $this->hasMany(Usuarios::class, 'id_usuario', 'criado_por');
    }

    public function produto()
    {
        return $this->hasMany(Produtos::class, 'codigo_produto', 'ref_codigo_produto');
    }
}
