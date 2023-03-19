@extends('layout.layout')

@section('titulo_pagina', 'Producto Detalhe')

@section('Conteudo_pagina')

    <div class="row container">
        <br>
        <br>
        <br>
        <div class="col s12 m6">
            <img src="{{ $producto->imagem }}" alt="" srcset="">
        </div>

        <div class="col s12 m6">
            <h4>{{ $producto->name }}</h4>
            <h5><strong>R$ {{ number_format($producto->preco, 2, ',', '.') }} </h5>
            <p>{{ $producto->descricao }}</p>
            <p>Postado por :<strong> {{ $producto->getUser->firstname }}</p>
            <p>Categoria : <strong>{{ $producto->getCategoria->nome }}</p>

            <button class="btn orange btn-large">Comprar</button>
        </div>

    </div>

@endsection

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush
