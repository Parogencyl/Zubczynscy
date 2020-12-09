<?php

$images = File::allFiles(public_path('graphics/galeria'));

for ($i=0; $i < count($images); $i++) { 
    $img[$i] =  $images[$i]->getFilename();
}

natsort($img);
$img = array_reverse($img);

?>

@extends('layouts.main')

@section('styles')
<link rel="stylesheet" href="css/galery.css">

<link href="css/foundation.css" rel="stylesheet" type="text/css" />
<link href="css/twentytwenty.css" rel="stylesheet" type="text/css" />
@stop

@section('content')
@yield('styles')

<!-- NIE MOZE BYC SPACJI W NAZWACH ZDJĘĆ -->

<script>
    $("#loading").addClass("closeLoader2");
</script>

<section>
    <h1 class="font-weight-bold text-uppercase text-center mt-5 text-white mb-5"> Galeria zdjęć </h1>
    <div id="galleryBg" style="background-image: url({{ asset('/graphics/bus.jpg') }})"> </div>

    <div class="container mb-4 ">
        <div class="twentytwenty-container ">
            <img src="{{ asset('/graphics/przed.jpg') }}" />
            <img src="{{ asset('/graphics/po.jpg') }}" class="galleryImg" onload="$(this).removeClass('galleryImg')" />
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>
    <script>
        $(function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.4});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.6, orientation: 'vertical'});
    });
    </script>

    <div class="container">
        <div id="photos">

            @foreach ($img as $image)
            <img data-enlargeable width="100" onload="$(this).removeClass('galleryImg')" class="w-100 my-2 galleryImg"
                style="cursor: zoom-in" src="{{ asset('graphics/galeria/' . $image) }}" />
            @endforeach

        </div>
    </div>

</section>


<script src="{{ asset('js/galery.js') }}"></script>

@endsection