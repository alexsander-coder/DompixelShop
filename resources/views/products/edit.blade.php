@extends('products.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb" style="margin-top:2rem;">
<div class="pull-left">
<h2>Editar produto</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Ops!</strong> Preencher campos obrigatórios!<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('products.update',$product->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nome:</strong>
<input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nome">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Preço:</strong>
<input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Preço">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Quantidade:</strong>
<input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control" placeholder="Quantidade">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Descrição:</strong>
<textarea class="form-control" style="height:150px" name="description" placeholder="Descrição">{{ $product->description }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</div>
</form>
@endsection