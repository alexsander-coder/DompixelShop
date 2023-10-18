@extends('products.layout')
@section('content')
<style>
  .descricao-container {
    max-height: 60px;
    overflow-y: auto;
    overflow-x: hidden;
    width: 190px;
}

.descricao-container::-webkit-scrollbar {
    display: none;
}

.lol{
  margin:0 5px 0 5px;
}

@media screen and (max-width: 990px) {
    .btn-action {
        margin-bottom: 10px;
        padding: 5px;
    }
}
</style>
<div class="row">
    <div class="col-lg-12 margin-tb text-center" style="margin-top:2rem;">
        <h1>Catálogo de Produtos</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right mb-3" style="margin-top:2rem;">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Criar novo produto</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered" style="margin-top:3rem;">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Descrição</th>
        <th class="text-center" width="280px">Ação</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
        <td>{{ $product->quantity }}</td>
        <td> <div class="descricao-container">
        {{ $product->description }}
        </div></td>
       <td class="text-center">
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="margin-top:1rem;">
            <a class="btn btn-info btn-sm btn-action" href="{{ route('products.show', $product->id) }}">Visualizar</a>

            <a class="btn btn-primary btn-sm lol btn-action"  href="{{ route('products.edit', $product->id) }}">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
        </form>
      </td>

    </tr>
    @endforeach
</table>
<div style="margin-left:45%;">
  {{ $products->onEachSide(1)->links('pagination::bootstrap-4', ['class' => 'custom-pagination']) }}
  @endsection
</div>
