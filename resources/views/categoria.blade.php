@extends('layout.layout')

@section('titulo_pagina', 'Página Inicial')

@section('Conteudo_pagina')


    <div class="row container">

        <h3>Categoria: {{ $Categoria->nome }} </h3>
        @foreach ($productos as $producto)
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $producto->imagem }}">
                        <a href="{{ route('details', $producto->slug) }}"
                            class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">info_outline</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ Str::limit($producto->name, 20) }}</span>
                        <p>{{ Str::limit($producto->descricao, 40) }}</p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    <div class="row center">
        {{ $productos->links('custom.pagination') }}
    </div>

@endsection


@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush
