@extends('layout.layout')

@section('titulo_pagina', 'Logo')

@section('Conteudo_pagina')

    <br>
    <br>
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-light mb-10 my-10 relative">Meus Productos</h1>

        <div class="flex flex-row">
            @foreach ($productos as $producto)
                <div class="flex flex-col shadow mx-4">
                    <div class="w-full min-w-full">
                        <a href="#!" data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ $producto->imagem }}" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            {{ Str::limit($producto->name, 20) }}
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            {{ Str::limit($producto->descricao, 40) }}
                        </p>
                        <a href="{{ route('details', $producto->slug) }}"
                            class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Ver
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row center">
            {{ $productos->links('custom.pagination') }}
        </div>
    </div>
    <!--
                                                                                                                                    <div class="row container">
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


                                                                                                                                 -->
@endsection
