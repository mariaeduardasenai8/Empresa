<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    
    public $fornecedor_id;
    public $nome;
    public $marca;
    public $descricao;
    public $preco_custo;
    public $preco_venda;
    public $quantidade_disponivel;
    public $estoque_minimo;
    

   
    public function salvar()
    {
          Produto::create([
        'fornecedor_id' => $this-> fornecedor_id,
        'nome' => $this->nome,
        'marca' => $this->marca,
        'descricao' => $this-> descricao,
        'preco_custo' => $this->preco_custo,
        'preco_venda' => $this->preco_venda,
        'quantidade_disponivel'=>$this->quantidade_disponivel,
        'estoque_minimo' =>$this->estoque_minimo,
        
        
    ]);
    session()->flash(
    'success',
    'Produto cadastrado com sucesso!'
);

    
    }
    
    public function render()
    {
        return view('livewire.produto-index');
    }
}
