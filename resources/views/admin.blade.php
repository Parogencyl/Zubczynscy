<?php

$images = File::allFiles(public_path('graphics/galeria'));

for ($i=0; $i < count($images); $i++) { 
    $img[$i] =  $images[$i]->getFilename();
}

natsort($img);
$img = array_reverse($img);

?>

@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="../css/galery.css">

<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel=" stylesheet " href=" https://unpkg.com/flickity-fullscreen@1/fullscreen.css ">
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src=" https://unpkg.com/flickity-fullscreen@1/fullscreen.js "> </script>

@stop

@section('content')
@yield('styles')

<section>
    <h1 class="font-weight-bold text-uppercase text-center mt-5 text-white mb-5"> Galeria zdjęć </h1>
    <div id="galleryBg" style="background-image: url({{ asset('/graphics/bus.jpg') }})"> </div>
    <div class="container">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <form action="{{ url('add') }}" method="POST" class="text-white mb-4" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1" style="font-size: 22px; text-transform: uppercase">Dodaj
                    zdjęcie</label>
                <p class="text-danger font-weight-bold"> <u> NAZWY ZDJĘĆ NIE MOGĄ MIEĆ SPACJI W NAZWIE </u> </p>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"
                    style="font-size: 17px">
            </div>
            <button type="submit" class="btn btn-lg btn-success"> Dodaj </button>
        </form>

        <div id="photos">

            @foreach ($img as $image)
            <div class="position-relative">
                <img data-enlargeable width="100" onload="$(this).removeClass('galleryImg')"
                    class="w-100 my-2 galleryImg" style="cursor: zoom-in"
                    src="{{ asset('graphics/galeria/' . $image) }}" />
                <div class="dustbin">
                    <form action="{{ url('delete') }}" method="POST">
                        @csrf
                        <input type="text" name="file" value="{{ $image }}" class="d-none">
                        <button type="submit"> <i class="fas fa-trash-alt"> </i> </button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<script src="{{ asset('/js/galery.js') }}"></script>

@endsection