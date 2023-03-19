<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo_pagina')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @stack('style')
    <!-- Compiled and minified CSS -->
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($Categorias as $CateM)
            <li><a href="{{ route('categoria', $CateM->id) }}">{{ $CateM->nome }}</a></li>
        @endforeach
    </ul>

    <!-- Navbar -->
    <nav class="red">
        <div class="nav-wrapper container">
            <a href="{{ route('site.index') }}" class="brand-logo center">CursoLaravel</a>
            <ul id="nav-mobile" class="left">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown1'>Categorias</a>
                </li>
                <li class=""><a href="">Carrinho</a></li>
            </ul>
        </div>
    </nav>
    <!-- Dropdown Structure -->






    @yield('Conteudo_pagina')






    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, options);
        });

        // Or with jQuery

        $('.dropdown-trigger').dropdown();
    </script>
</body>

</html>
