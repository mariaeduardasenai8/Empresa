<?php

use App\Livewire\Login;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoIndex;
use App\Livewire\Produtos;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)
    ->name('login');


    Route::get(
        '/produtos/novo',
        ProdutoCreate::class
    )->name('produtos.create');

Route::get('/produtos', ProdutoIndex::class)->name('produto.index');
