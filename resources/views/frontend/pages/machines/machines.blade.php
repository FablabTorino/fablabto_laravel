@extends('layouts.frontend')

@section('title', 'Fablab Torino | Macchine')

@section('content')

    <!-- Title section for Machines page -->
    <div id="machines" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-cnc.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                Macchine
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div class="container">
        <div class="row m-t-40 m-b-40">
            <div class="col-md-6 col-sm-6">
                <div class="promotion promotion-lg">
                    <div
                        class="promotion-image promotion-image-light text-right promotion-image-overflow-top promotion-image-overflow-right">
                        <img src="images/machines/matilda/matilda.png" alt="Matilda">
                    </div>
                    <div class="promotion-caption">
                        <h4 class="promotion-title">Matilda</h4>
                        <div class="promotion-price">
                            <small><i class="fas fa-ruler fa-fw"></i></small>
                            120 x 90 cm <br/>
                            <small><i class="fas fa-bolt fa-fw"></i></small>
                            100 watt <br/>
                            <small><i class="fas fa-euro-sign fa-fw"></i></small>
                            1 euro/min
                        </div>
                        <p class="promotion-desc">La veterana del Fablab!<br>
                            Fidata compagna dei maker, si "illumina" per i vostri progetti!</p>
                        <a href="laser/matilda" class="btn btn-inverse">Dettagli</a>
                        <a href="/booking" class="btn btn-theme">Prenota</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-sm-6">
                <div class="promotion promotion-lg ">
                    <div class="promotion-image promotion-image-light text-right promotion-image-overflow-top promotion-image-overflow-right">
                        <img src="images/machines/fresone/fresone.png" alt="Fresone">
                    </div>
                    <div class=" promotion-caption">
                        <h4 class="promotion-title">Fresone</h4>
                        <div class="promotion-price">
                            <small><i class="fas fa-ruler fa-fw"></i></small> 120 x 200 cm <br/>
                            <small><i class="fas fa-wrench fa-fw"></i></small> pinza ER20 <br/>
                            <small><i class="fas fa-euro-sign fa-fw"></i></small> 60 euro/ora
                        </div>
                        <p class="promotion-desc">Il gigante del Fablab!<br>
                            Potente e massiccia, nessun lavoro &egrave; troppo pesante per lei!</p>
                        <a href="cnc/fresone" class="btn btn-inverse">Dettagli</a>
                        <a href="/booking" class="btn btn-theme">Prenota</a>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6 col-sm-6">
                <div class="promotion promotion-lg">
                    <div class="promotion-image promotion-image-light text-right promotion-image-overflow-top promotion-image-overflow-right">
                        <img src="images/machines/roland/roland.png" alt="Roland">
                    </div>
                    <div class=" promotion-caption">
                        <h4 class="promotion-title">Roland</h4>
                        <div class="promotion-price">
                            <small><i class="fas fa-ruler fa-fw"></i></small> 30 x 30 cm <br/>
                            <small><i class="fas fa-wrench fa-fw"></i></small> pinza 3/4/6 mm <br/>
                            <small><i class="fas fa-euro-sign fa-fw"></i></small> 40 euro/ora
                        </div>
                        <p class="promotion-desc">La pi&ugrave; precisa al Fablab!<br>
                            Sembra un micro-onde, ma anche senza esserlo sforna dei veri capolavori!</p>
                        <a href="cnc/roland" class="btn btn-inverse">Dettagli</a>
                        <a href="/booking" class="btn btn-theme">Prenota</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-b-40">
            <div class="col-md-6 col-sm-6">
                <div class="promotion promotion-lg">
                    <div class="promotion-image promotion-image-light text-right promotion-image-overflow-top promotion-image-overflow-right">
                        <img src="images/machines/creality/crealitys5.png" alt="Creality CR-10 S5">
                    </div>
                    <div class=" promotion-caption">
                        <h4 class="promotion-title">Creality CR-10 S5</h4>
                        <div class="promotion-price">
                            <small><i class="fas fa-ruler fa-fw"></i></small> 500 x 500 x 500 mm <br/>
                            <small><i class="fas fa-crutch fa-fw"></i></small> 1.75 mm <br/>
                            <small><i class="fas fa-euro-sign fa-fw"></i></small> 5 euro/ora
                                    <small>comprensivo di materiale</small>
                        </div>
                        <p class="promotion-desc">
                            Una stampante 3D di grandi dimensioni per dare vita alle tue idee!</p>
                        <a href="3dprint/crealitys5" class="btn btn-inverse">Dettagli</a>
                        <a href="/booking" class="btn btn-theme">Prenota</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="promotion promotion-lg">
                    <div
                        class="promotion-image promotion-image-light text-right promotion-image-overflow-top promotion-image-overflow-right">
                        <img src="images/machines/camm.png" alt="CAMM GX24">
                    </div>
                    <div class=" promotion-caption">
                        <h4 class="promotion-title">Roland Camm GX 24</h4>
                        <div class="promotion-price">
                            <small><i class="fas fa-ruler fa-fw"></i></small>
                            58 cm <br/>
                            <small><i class="fab fa-usb fa-fw"></i></small>
                            USB connection <br/>
                            <small><i class="fas fa-euro-sign fa-fw"></i></small>
                            1 euro/min
                        </div>
                        <p class="promotion-desc">La pi&ugrave; facile!<br>
                            Semplice e veloce, nessuno sticker &egrave; troppo difficile per lei!</p>
                        <a href="vinyl/camm" class="btn btn-inverse">Dettagli</a>
                        <a href="/booking" class="btn btn-theme">Prenota</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
