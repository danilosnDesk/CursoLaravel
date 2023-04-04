@extends('admin.layout')

@section('titulo_pagina', 'Dashboard')


<div class="container mx-auto overflow-hidden">
    @section('Conteudo_pagina')

        <!-- modals -->
        @include('admin.producto.create')
        <!-- modals -->

        <div class="w-full flex justify-between">
            <h3 class="text-2xl font-light text-gray-700">Productos</h3>
            <span
                class="bg-gray-300 text-sm text-gray-500 flex items-center justify-center p-2 rounded-3xl">{{ $productos->count() }}
                productos exibidos</span>
        </div>

        <style>
            .webkit-cancel-buttom::-webkit-search-cancel-button {
                appearance: none;
            }

            .webkit-cancel-buttom::placeholder {
                font-size: 13px;
                color: white;
                font-weight: 400;

            }
        </style>
        <div class="pt-5">

            <form method="POST" class="w-full bg-red-500 flex items-center px-2 py-3">
                <span class="text-xs pr-2"><i class="bi bi-search"></i></span>
                <input placeholder="Buscar Producto..." type="search"
                    class="webkit-cancel-buttom w-full bg-none outline-0 bg-transparent text-gray-900 font-semibold">
            </form>

        </div>
        <!-- table display productos -->
        <div class="flex flex-col mt-0">
            <div class=" ">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-1">Imagem</th>
                                    <th scope="col" class="px-6 py-1">#ID</th>
                                    <th scope="col" class="px-6 py-1">Nome</th>
                                    <th scope="col" class="px-6 py-1">Preço</th>
                                    <th scope="col" class="px-6 py-1">Categoria</th>
                                    <th scope="col" class="px-6 py-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                            <img src="{{ $producto->imagem }}" alt="{{ $producto->name }}" class="w-[50px]">
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $producto->id }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            {{ Str::limit($producto->name, 20, '...') }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">AOA {{ $producto->preco }} kzs</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            {{ Str::limit($producto->getCategoria->nome, 20, '...') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <a href="#" class="bg-orange-600 rounded-lg text-white text-xs p-2"><i
                                                    class="fi fi-rr-edit"></i></a>
                                            <a href="#" class="bg-red-700 rounded-lg text-white text-xs p-2"
                                                data-te-toggle="modal" data-te-target="#delete-{{ $producto->id }}">
                                                <i class="fi fi-rr-trash"></i></a>
                                        </td>
                                        <!-- modal delete -->
                                        @include('admin.producto.delete')
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- table display productos -->
        <div class="row center">
            {{ $productos->links('custom.pagination') }}
        </div>
        <div class="absolute right-20 bottom-2">
            <a href="#" data-te-toggle="modal" data-te-target="#create"
                class="flex items-center justify-center bg-red-600 text-white  p-3 rounded-lg">
                <span class="px-2">
                    <i class="fi fi-tr-square-plus"></i>
                </span>
                <span class="mx2 text-sm">Producto</span></a>
        </div>

    @endsection
</div>
