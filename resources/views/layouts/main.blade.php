<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('public/graphics/icon.png') }}" />

    <meta name="description" content="Nasza firma specjalizuje się w wylewkach maszynowych z wykorzystaniem
    pompy do betonu typu mixokret, wraz z
    zacieraniem mechanicznym. Pomiary oraz nanoszenie wysokości wylewek wykonujemy sprzętem najwyższej klasy,
    dzięki czemu wylewki zrealizowane przez naszą firmę, są wykonane z dużą dokładnością oraz starannością." />
    <meta name="author" content="Damian Bohonos" />
    <meta name="copyright" content="Copyright owner" />
    <meta name="keywords"
        content="Posadzki, Posadzki maszynowe, Lubań, Jelenia Góra, Świeradów, Budowa, Mixokret, Beton, Zacieranie mechaniczne, Wylewka, Remonty, Wykończenia, Zalewanie, Posadzka" />
    <meta name="robots" content="follow" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Zubczyńscy </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel=" stylesheet " href=" https://unpkg.com/flickity-fullscreen@1/fullscreen.css ">
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src=" https://unpkg.com/flickity-fullscreen@1/fullscreen.js "> </script>

</head>

<body>
    <div id="loading" style="background-image: url({{ asset('/graphics/logo_bez_tla.png')}} )">
        <div id="loadingText"> WCZYTYWANIE </div>
    </div>

    <div id="app" class="d-flex flex-column min-vh-100">
        <nav id="navbar" class="navbar smart-scroll navbar-expand-md navbar-light bg-white shadow-sm w-100 px-sm-0 px-3"
            style="z-index: 200">
            <div class="container">
                <a class="navbar-brand p-0" href="{{ url('/') }}">
                    <img src="{{ asset('graphics/logo_bez_tla.png') }}" alt="logo" style="height: 50px; width: 140px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mt-sm-0 mt-3">
                        <li class="nav-item mt-sm-0 mt-2">
                            <a class="nav-link py-0" href="{{ url('/#mainImage') }}"> HOME </a>
                        </li>
                        <li class="nav-item mt-sm-0 mt-2">
                            <a class="nav-link py-0" href="{{ url('/#about') }}"> O firmie </a>
                        </li>
                        <li class="nav-item mt-sm-0 mt-2">
                            <a class="nav-link py-0" href="{{ url('/#offer') }}"> Oferta </a>
                        </li>
                        <li class="nav-item mt-sm-0 mt-2">
                            <a class="nav-link py-0" href="{{ url('/#galery') }}"> Galeria </a>
                        </li>
                        <li class="nav-item mt-sm-0 mt-2">
                            <a class="nav-link py-0" href="{{ url('/#opinions') }}"> Opinie </a>
                        </li>
                        <li class="nav-item mt-sm-0 mt-2">
                            <a class="nav-link py-0" href="{{ url('/#contact') }}"> Kontakt </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="mt-auto pt-0">
        <p class="text-light mb-0 text-center p-3" style="background-color: black"> &copy;2020 Zubczyńscy.
            Wszelkie
            prawa
            zastrzeżone. </p>
    </footer>
</body>

<script src="{{ asset('js/nav.js') }}"></script>

</html>