@extends('products.layout')
@section('content')
<div class="center-screen">
    <div class="card" style="margin-top:3rem;">
        <div class="card-header">
            <h2 class="mb-0 text-center">Visualizar produto</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $product->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Preço:</strong>
                        R$ {{ number_format($product->price, 2, ',', '.') }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantidade:</strong>
                        {{ $product->quantity }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descrição:</strong>
                        {{ $product->description }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
        </div>
    </div>
</div>
@endsection
