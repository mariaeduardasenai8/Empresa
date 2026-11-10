<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    protected $fillable = [
       'fornecedor_id',
        'nome',
        'marca',
        'descricao',
        'preco_custo',
        'preco_venda',
        'quantidade_disponivel',
        'estoque_minimo',
    ];

    public function produtos(): HasMany
    {
        return $this->hasMany(Produto::class);
    }
}