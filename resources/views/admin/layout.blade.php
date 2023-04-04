<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo_pagina')</title>

    <link rel="icon" type="image/png" href="{{ asset('php.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-thin-rounded/css/uicons-thin-rounded.css'>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')


    <!-- Compiled and minified CSS -->
</head>

<body>

    <header class="shadow h-95 px-5 py-2">
        <!-- nav desktop -->
        <nav class="flex flex-row justify-between items-center">
            <div>
                <a href="{{ route('admin.dashboard') }}" class="text-4xl font-bold text-red-400">
                    <i class="bi bi-dot"></i>
                    Dashboard
                </a>
            </div>

            @auth
                <div class="relative flex flex-row items-center" data-te-dropdown-ref>
                    <a href="#" id="fullscreen" class="mx-2" title="ecrã inteiro"><i
                            class="bi bi-arrows-fullscreen"></i></a>
                    <a class="flex bg-slate-300 px-5 py-1 items-center transition duration-150 ease-in-out" href="#"
                        type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
                        data-te-ripple-init data-te-ripple-color="light">
                        <span>
                            <i class="bi bi-person"></i>
                        </span>
                        <span class="text-sm px-1">
                            {{ auth()->user()->firstname }}
                        </span>

                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>

                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:text-red-500 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Meu Perfil</a>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:text-red-500 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="{{ route('site.index') }}" data-te-dropdown-item-ref>Home</a>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:text-red-500 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="{{ route('login.logout') }}" data-te-dropdown-item-ref>Terminar Sessão</a>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login.form') }}"
                    class="text-sm  text-white py-2 w-[120px] bg-red-400 font-bold flex justify-center items-center rounded-lg uppercase  hover:bg-red-500"><i
                        class="bi bi-lock px-2"></i> Login</a>

            @endauth


        </nav>

    </header>

    <body>
        <main class="flex flex-row h-full">
            <div class="w-1/4 flex justify-start h-full mx-0 bg-white shadow-lg">
                <div class="container mx-auto  h-full w-3/4 py-6">
                    <div class="flex flex-row">
                        <div class="flex flex-row py-4">
                            <span class="px-2">
                                <i class="bi bi-person"></i>
                            </span>
                            <h3 class="text-sm text-gray-500">Danilson Kayumbuca</h3>
                        </div>

                    </div>
                    <div class="h-px bg-slate-200 w-full"></div>
                    <div class="flex flex-row">
                        <ul class="flex flex-col pl-6 w-full">
                            <li class="py-5"><a class="text-sm text-gray-700 w-full hover:text-red-500"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="bi bi-house px-4 py-2 bg-slate-300"></i>
                                    <span>Dashboard</span> </a>
                            </li>
                            <li class="py-5"><a class="hover:text-red-500 text-sm text-gray-700 w-full  "
                                    href="">
                                    <i class="bi bi-people px-4 py-2 bg-slate-300"></i>
                                    <span>Definir usuários</span> </a>
                            </li>
                            <li class="py-5 "><a class="text-sm hover:text-red-500 text-gray-700 w-full  "
                                    href="{{ route('admin.productos') }}">
                                    <i class="bi bi-people px-4 py-2 bg-slate-300"></i>
                                    <span>Meus Productos</span> </a>
                            </li>
                            <li class="py-5 "><a class="text-sm hover:text-red-500 text-gray-700 w-full  "
                                    href="">
                                    <i class="bi bi-check2-square px-4 py-2 bg-slate-300"></i> <span>Nova
                                        Categoria</span> </a>
                            </li>
                            <li class="py-5 "><a class="text-sm hover:text-red-500 text-gray-700 w-full  "
                                    href="{{ route('admin.pdf') }}">
                                    <i class="bi bi-filetype-pdf px-4 py-2 bg-slate-300"></i> <span>
                                        Gerar Relatório</span> </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="w-full">
                <div class="p-6">
                    @yield('Conteudo_pagina')
                </div>
            </div>
        </main>









        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            let fullscreen = document.querySelector('#fullscreen');
            let fullscreen_active = false;

            fullscreen.onclick = () => {
                document.documentElement.requestFullscreen();
            }
        </script>
    </body>

</html>
