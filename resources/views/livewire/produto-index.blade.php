
    <div class="conteiner py-5">
        <div class="text-center"

    <form wire:submit="salvar">

         
        <input type="text" class="form-control" id="nome" placeholder="nome" wire:model="nome">  <br>
        <br>
          <input type="text"  class="form-control" id="marca" placeholder="marca" wire:model="marca">  <br>
        <br>
          <input type="text"  class="form-control" id="Descrição" placeholder="Descrição" wire:model="descricao">  <br>
        <br>
        <input type="number"  class="form-control" id="Estoque "placeholder="Estoque" wire:model="preco"> <br>
        <br>
        <input type="number"  class="form-control" id="quantidde" placeholder="quantidade" wire:model="quantidade"> <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
</div>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    {{ session('success') }}

    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif