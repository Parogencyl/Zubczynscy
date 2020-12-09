@extends('layouts.main')

@section('styles')
<link rel="stylesheet" href="css/services.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
@stop

@section('content')
@yield('styles')

<!-- NIE MOZE BYC SPACJI W NAZWACH ZDJĘĆ -->

<section>
    <h1 class="font-weight-bold text-uppercase text-center mt-5 mb-5"> Usługi realizowane przez firmę </h1>

    <div class="container">

        <p class="px-sm-5 px-0"> Nasza firma w głównej mierze zajmuje się mechanicznym wylewaniem posadzek. Realizowane
            jest to z
            wykorzystaniem maszyny mixokret, a następnie równane za pomocą specjalizytycznych robotów poziomujących.
            Dodatkowo Nasza firma zajmuje się usługami ogólnobudowlanymi, do których należą:
        </p>

        <div class="row justify-content-center mb-5">
            <div id="left" class="col-sm-11 col-md-5 col-xl-4 text-center mt-4">
                <!-- <h3 class="text-uppercase font-weight-bold title show-on-scroll-title"> Budowy </h3> -->
                <div class="image image1 show-on-scroll-image"
                    style="background-image: url('{{ asset('graphics/budowa.jpg') }}')">
                    <div class="bgDark"></div>
                </div>
            </div>
            <div id="center" class="col-sm-11 col-md-5 col-xl-4 text-center mt-4">
                <!-- <h3 class="text-uppercase font-weight-bold title show-on-scroll-title"> Remonty </h3> -->
                <div class="image image2 show-on-scroll-image"
                    style="background-image: url('{{ asset('graphics/gladzenie.jpg') }}')">
                    <div class="bgDark"></div>
                </div>
            </div>
            <div id="right" class="col-sm-11 col-md-5 col-xl-4 text-center mt-4">
                <!-- <h3 class="text-uppercase font-weight-bold title show-on-scroll-title"> Wykończenia </h3> -->
                <div class="image image3 show-on-scroll-image"
                    style="background-image: url('{{ asset('graphics/lazienka.jpg') }}')">
                    <div class="bgDark"></div>
                </div>
            </div>
        </div>

    </div>

</section>


<script src="{{ asset('js/services.js') }}"></script>

@endsection