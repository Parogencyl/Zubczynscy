@extends('layouts.main')

@section('styles')
<link rel="stylesheet" href="css/index.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
@stop

@section('content')
@yield('styles')


<section id="mainImage" class="position-relative w-100" style="margin-top: -60px">
    <img src="{{ asset('graphics/robot.jpg') }}" class="vh-100 w-100">
    <div class="imageShadow"> </div>
    <div class="position-absolute vh-100 w-100 px-sm-5 px-2 mx-auto text-center d-flex flex-wrap align-content-center text-white pt-5"
        style="z-index: 10; top: 0">
        <div class="col-12 font-weight-bold pb-3" id="mainImageCompany"> Zubczyńscy </div>
        <div class="col-12 font-weight-bold" id="mainImageText"> Posadzki maszynowe </div>
    </div>
</section>


<!-- 

    O firmie 

-->


<section id="about" class="container pb-3">
    <div class="text-center py-5">
        <h1> O firmie </h1>
    </div>
    <p class="show-on-scroll inline-showY"> Nasza firma specjalizuje się w wylewkach maszynowych z wykorzystaniem
        pompy
        do betonu
        typu mixokret, wraz z
        zacieraniem mechanicznym. Pomiary oraz nanoszenie wysokości wylewek wykonujemy sprzętem najwyższej klasy,
        dzięki
        czemu wylewki zrealizowane przez naszą firmę, są wykonane z dużą dokładnością oraz starannością.
    </p>
    <p class="show-on-scroll inline-showY">
        Świadczymy usługi zarówno dla klientów indywidualnych jak i firm, czy instytucji publicznych. Bezłpatnie
        dojeżdzamy do klienta oraz dokonujemy wyceny realizowanej usługi. Naszym priorytetem jest
        zadowolony klient oraz precyzyjne wykonanie zlecenia.
    </p>
    <p class="show-on-scroll inline-showY">
        Nasza firma działa na terenie dolnego śląska w powiatach: Lubań, Lwówek, Jelenia Góra, Zgorzelec i ich
        okolice.
    </p>

    <p class="text-center mt-3 mb-0 show-on-scroll fb-show">
        <a href="https://www.facebook.com/zubczynscy" target="_blank"> <i class="fab fa-facebook-square fb shake"></i>
        </a>
    </p>

</section>


<!-- 

    Oferta 

-->


<section id="offer" class="position-relative w-100 pb-3">
    <div class="text-center py-5">
        <h1> Oferta </h1>
    </div>

    <div class="position-relative w-100 py-5" id="offerGif">
        <div class="bgImage" style="background-image: url({{ asset('graphics/maszyna3.gif')}} )"> </div>
        <div class="darkening"> </div>

        <p class="gifText text-center py-3 write-on-scroll" id="typedtext">
        </p>
    </div>

    <div class="position-relative w-100 mt-5 container">
        <h2 class="text-center pb-4 font-weight-bold text-uppercase"> Posadzki Maszynowe </h2>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header p-0" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn p-4 btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Wycena usługi
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Po umówieniu spotkania z naszą firmą przyjedziemy do Państwa przedstawić dokładnie naszą ofertę
                        oraz dokonać wyceny. Dojazd do Państwa jak i wycena usługi jest bezpłatna.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header p-0" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn p-4 btn-block text-left collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Zamawianie niezbędnego towaru
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Podczas wizyty u Państwa przedstawimy dwa warianty realizacji usługi. Pierwszy z nich polega na
                        zamówieniu piasku oraz cementu przez Klienta- ilość niezbędnego materiału zostanie podana
                        podczas wyceny. W drugim wariancie cement oraz piasek zamawia Nasza firma. Ceny w obu
                        przypadkach uzgadniane są z Klientem.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header p-0" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn p-4 btn-block text-left collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Realizacja usługi
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        Przyjedziemy do Państwa w umówionym terminie w celu realizacji usługi. Od czego zaczniemy? Na
                        początku układamy piankę dylatacyjną przy ścianach w celu odizolowania wykonywanej posadzki od
                        ścian,
                        następnie za pomocą maszyny mixokret mieszana jest zaprawa podawana do zalewanego pomieszczenia.
                        Zaprawa równana jest za pomocą robota co daje gwarancję idealnie równej posadzki. Ostatnim
                        etapem wykonywanej pracy jest zacieranie mechaniczne wyrównanej posadzki.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header p-0" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn p-4 btn-block text-left collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Dodatki od Naszej firmy
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        Cena każdej wykonywanej usługi uwzględnia z góry:
                        <br />
                        - dojazd do klienta,
                        <br />
                        - włókno polipropylenowe dodawane do posadzki w celu jej wzmocnienia,
                        <br />
                        - pianka dylatacyjna oddzielająca posadzkę od ściany,
                        <br />
                        - plastyfikator (cena uwzględnia wykorzystanie podstawowej wersji, przy wykorzystywaniu innego
                        plastyfikatora cena ulegnie zmianie).
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header p-0" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn p-4 btn-block text-left collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Dodatkowe informacje
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        Oferujemy również ułożenie styropianu pod posadzkę za dodatkową opłatą.
                        <br />
                        <br />
                        Średnia grubość posadzki wylewanej w pomieszczeniu mieszkalnym wynosi 7cm.
                        <br />
                        <br />
                        Odpowiednia pielęgnacja posadzki po jej wykonaniu zapobiega późniejszemu jej pękaniu.
                        Pomieszczenie powinno być szczelnie zamknięte, aby zapobiec zbyt szybkiemu odparowywaniu wody co
                        skutkuje zbyt szybkim wyschnięciem posadzki i wystąpieniem pęknięć. Gdy nie jest możliwe
                        szczelne zamknięcie pomieszczenia należy posadzkę przykryć folią. Posadzkę wykonaną na zewnątrz
                        należy szczelnie przykryć folią oraz co jakiś czas podlewać wodą. Czas potrzebny do pełnego
                        wyschnięcia posadzki wynosi ok 28 dni.
                        <br />
                        <br />
                        Wykorzystujemy sprawdzone materiały firmy Flipa Technik, z którą nawiązaliśmy współpracę.

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="position-relative w-100 mt-5 container">
        <h3 class="text-center pb-2 font-weight-bold text-uppercase"> Inne usługi </h3>
        <p class="mb-0 text-center"> Nasza firma zajmuje się także budową domów oraz kompleksowym wykonywaniem
            wnętrz.
        </p>
        <div class="row justify-content-center mt-4">
            <a href="{{ url('/uslugi') }}" class="btn btn-lg mb-5"> Więcej informacji </a>
        </div>
    </div>

</section>


<!-- 
    
    Galeria 

-->


<section id="galery" class="pb-3">
    <div class="text-center py-5">
        <h1> Galeria </h1>
    </div>

    <div class="container">

        <!-- Flickity HTML init -->
        <div class="carousel mb-5">
            <div class="carousel-cell">
                <img src="{{ asset('graphics/rownanie.jpg') }}" alt="robot równający">
                <div class="shadowCarousel"></div>
            </div>
            <div class="carousel-cell">
                <img src="{{ asset('graphics/bus.jpg') }}" alt="buz z mixokretem">
            </div>
            <div class="carousel-cell">
                <img src="{{ asset('graphics/komarno.jpg') }}" alt="gotowa posadzka">
            </div>
            <div class="carousel-cell">
                <img src="{{ asset('graphics/maszyny.jpg') }}" alt="roboty">
            </div>
            <div class="carousel-cell">
                <img src="{{ asset('graphics/dom3.jpg') }}" alt="wybudowany dom">
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <a href="{{ url('galeria') }}" class="btn btn-lg mt-3"> Pełna galeria </a>
        </div>
    </div>
</section>

<script>
    var $carousel = $('.carousel').flickity({
  // options
  contain: true,
  fullscreen: true,
  percentPosition: false,
  lazyLoad: 1,
});

var $imgs = $carousel.find('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
  'transform' : 'WebkitTransform';
// get Flickity instance
var flkty = $carousel.data('flickity');

$carousel.on( 'scroll.flickity', function() {
  flkty.slides.forEach( function( slide, i ) {
    var img = $imgs[i];
    var x = ( slide.target + flkty.x ) * -1/3;
    img.style[ transformProp ] = 'translateX(' + x  + 'px)';
  });
});

</script>


<!-- 
    
    Opinie 

-->


<section id="opinions" class="mb-sm-3 mb-0 pb-5">
    <div class="text-center py-5">
        <h1> Opinie </h1>
    </div>

    <div class="container justify-content-center pb-sm-5 pb-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="15000">
            <ol class="carousel-indicators" style="bottom: -40px">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner text-justify">

                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center">
                        <div class="fas fa-male col-sm-1 col-10 pb-sm-0 pb-4 text-sm-right text-center"
                            style="font-size: 100px">
                        </div>
                        <div class="col-10 col-sm-9">
                            <p class="text"> Firma sumiennie i terminowo wykonuje zlecenia. Polecam w 100%. 🙂 </p>
                            <p class="person mb-0 font-weight-bold align-items-center row pl-3"> <i
                                    class="fab fa-facebook-square text-primary pr-3" style="font-size: 23px"></i>
                                Sylwia Szejmo </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center ">
                        <div class="fas fa-male col-sm-1 col-10 pb-sm-0 pb-4 text-sm-right text-center"
                            style="font-size: 100px">
                        </div>
                        <div class="col-10 col-sm-9">
                            <p class="text"> Firma jest bardzo rzetelna , usługi są zawsze wykonywane z największą
                                precyzją . Terminowość usług jest przez firmę przestrzegana. I pracownicy firmy są
                                bardzo sympatyczni 😊👌
                            </p>
                            <p class="person mb-0 font-weight-bold align-items-center row pl-3"> <i
                                    class="fab fa-facebook-square text-primary pr-3" style="font-size: 23px"></i>
                                Agata Aleksandra Kosak </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center">
                        <div class="fas fa-male col-sm-1 col-10 pb-sm-0 pb-4 text-sm-right text-center"
                            style="font-size: 100px">
                        </div>

                        <div class="col-10 col-sm-9">
                            <p class="text">polecam polecam polecam !!! pracownicy mocno zmobilizowani mega pracowici i
                                mega dokładni. posadzka idealna .... fachowcy jakich niewiele na rynku . mega polecam
                                !!!
                            </p>
                            <p class="person mb-0 font-weight-bold align-items-center row pl-3"> <i
                                    class="fab fa-facebook-square text-primary pr-3" style="font-size: 23px"></i>
                                Jowita Włodarczyk
                            </p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row justify-content-center mt-5 mx-0" id="opinionIcons">

            <div class="col-10 col-sm-4 col-md-3 mt-sm-0 mt-3 justify-content-center row show-on-scroll opinionIcons1">
                <div class="circle justify-content-center row align-items-center" style="width: 100px; height: 100px">
                    <i class="fas fa-tools"></i> </div>
                <p class="col-12 text-center mb-1 mt-2"> Zrealizowane projekty </p>
                <p class="col-12 text-center"> <i class="fas fa-plus"></i><strong> 50 </strong> </p>
            </div>

            <div class="col-10 col-sm-4 col-md-3 mt-sm-0 mt-3 justify-content-center row show-on-scroll opinionIcons2">
                <div class="circle justify-content-center row align-items-center" style="width: 100px; height: 100px">
                    <i class="fas fa-home"></i> </div>
                <p class="col-12 text-center mb-1 mt-2"> Wylane posadzki </p>
                <p class="col-12 text-center"> <i class="fas fa-plus"></i><strong> 5 000m<sup>2</sup> </strong> </p>
            </div>

            <div class="col-10 col-sm-4 col-md-3 mt-sm-0 mt-3 justify-content-center row show-on-scroll opinionIcons3">
                <div class="circle justify-content-center row align-items-center" style="width: 100px; height: 100px">
                    <i class="fas fa-user-alt"></i> </div>
                <p class="col-12 text-center mb-1 mt-2"> Zadowoleni klienci </p>
                <p class="col-12 text-center"> <strong> WSZYSCY </strong> </p>
            </div>
        </div>

</section>

<script type="text/javascript">
    /* ustawienie wysykości dla opini */

        $('#carouselExampleIndicators .carousel-item').addClass('active');
        var height1 = $('#carouselExampleIndicators .carousel-item:eq(0)').height();
        var height2 = $('#carouselExampleIndicators .carousel-item:eq(1)').height();
        var height3 = $('#carouselExampleIndicators .carousel-item:eq(2)').height();
        $('#carouselExampleIndicators .carousel-item:eq(1)').removeClass('active');
        $('#carouselExampleIndicators .carousel-item:eq(2)').removeClass('active');

        if(height1 >= height2){
            if(height1 >= height3){
                var mainHeight = height1;
            } else {
                var mainHeight = height3;
            }
        } else if(height2 >= height3){
                var mainHeight = height2;   
        } else {
                var mainHeight = height3;   
        }

        $('#carouselExampleIndicators').height(mainHeight);
</script>


<!-- 
    
    Kontakt 

-->


<section id="contact" class="pb-5">
    <div class="container">
        <div class="text-center py-5">
            <h1> Kontakt </h1>
        </div>

        <div class="row justify-content-center align-items-center">
            <div id="map" class="col-12 col-sm-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1254.866922911673!2d15.382446909736206!3d51.02858568296604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDAxJzQyLjkiTiAxNcKwMjMnMDAuOCJF!5e0!3m2!1spl!2spl!4v1556705115346!5m2!1spl!2spl"
                    style="border: 0" allowfullscreen></iframe>
            </div>
            <div id="information" class="col-12 col-sm-6">
                <p>
                    <span class="fas fa-building"></span> Firma budowlana
                    <strong>ZUBCZYŃSCY</strong>
                </p>
                <p><span class="fas fa-male"></span> Marian Zubczyński</p>
                <p><span class="fas fa-map-marker-alt"></span> Karłowice 10</p>
                <p><span class="fas fa-map-marker-alt"></span> 59-830 Olszyna</p>

                <p><span class="fas fa-phone-square"></span> Tel: 530 777 204</p>
                <p><span class="fas fa-phone-square"></span> Tel: 570 565 292</p>
                <p>
                    <span class="fas fa-envelope"></span> Email: zubczynscy@interia.pl
                </p>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/index.js') }}"> </script>

@endsection