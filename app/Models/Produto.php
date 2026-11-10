<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
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
        'ativo',
        
    ];

    protected function casts(): array
    {
        return [
            'preco_custo' => 'decimal:2',
            'ativo' => 'boolean',
        ];
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}