@extends('layout.layout')

@section('titulo_pagina', 'Producto Detalhe')

@section('Conteudo_pagina')

    <div class="container mx-auto">
        <br>
        <br>
        <br>
        <div class="flex flex-grow justify-between">
            <div class="ml-3 bg-red-500">
                <img src="{{ $producto->imagem }}" alt="" srcset="">
            </div>
            <div class="w-1/2 p-4">
                <h4 class="font-bold text-2xl text-gray-700 py-3">{{ $producto->name }}</h4>
                <h5 class="text-xl text-gray-700 py-3"><strong>R$ {{ number_format($producto->preco, 2, ',', '.') }} </h5>
                <p class="text-gray-400 py-3">{{ $producto->descricao }}</p>
                <p class="text-gray-400 py-3">Postado por :<strong> {{ $producto->getUser->firstname }}</p>
                <p class="text-gray-400 py-3">Categoria : <strong>{{ $producto->getCategoria->nome }}</p>

                <button class="cursor-pointer px-6 py-3 bg-red-500 text-white uppercase text-xs">Comprar</button>
            </div>

        </div>
    </div>
@endsection

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush
