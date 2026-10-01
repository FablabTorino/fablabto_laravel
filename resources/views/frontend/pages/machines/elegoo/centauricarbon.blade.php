<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Elegoo Centauri Carbon #' . $id)

@section('content')

    <!-- Title section for history page -->
    <div id="centauricarbon" class="content bg-black-darker has-bg extraPageTitle titleSmall" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-generic.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
    </div>
    <!-- end Title section -->

    <div id="centauricarbon" class="content extraPageContentGhost" data-scrollview="true">
        <!-- begin container -->
        <div class="container">

            <!-- BEGIN product -->
            <div class="product">
                <!-- BEGIN product-detail -->
                <div class="product-detail">

                    <!-- BEGIN product-info -->
                    <div class="product-info">
                        <!-- BEGIN product-info-header -->
                        <div class="product-info-header">
                            <h1 class="product-title">Elegoo Centauri Carbon #{{ $id }}</h1>
                        </div>
                        <!-- END product-info-header -->

                        <!-- BEGIN STATO -->
                        <div class="product-warranty">
                            <div class="pull-right btn btn-lime btn-xs ">Operativa</div>
                            <!--div class="pull-right btn btn-red btn-xs ">In manutenzione</div-->
                            <div><b>Stato:</b></div>
                        </div>
                        <!-- END STATO -->

                        <!-- BEGIN CARATTERISTICHE -->
                        <ul class="product-info-list">
                            <li><i class="fa fa-circle"></i> Tecnologia: FDM CoreXY, camera di stampa chiusa</li>
                            <li><i class="fa fa-circle"></i> Area di stampa: 256 x 256 mm</li>
                            <li><i class="fa fa-circle"></i> Altezza di stampa: 256 mm</li>
                            <li><i class="fa fa-circle"></i> Ugello: 0.4 mm in acciaio temprato</li>
                            <li><i class="fa fa-circle"></i> Diametro filamento: 1.75 mm</li>
                            <li><i class="fa fa-circle"></i> Velocit&agrave; stampa: fino a 500 mm/sec</li>
                            <li><i class="fa fa-circle"></i> Temperatura ugello / piatto: fino a 320 / 110 &deg;C</li>
                            <li><i class="fa fa-circle"></i> Calibrazione completamente automatica</li>
                            <li><i class="fa fa-circle"></i> Telecamera integrata per il monitoraggio della stampa</li>
                            <li><i class="fa fa-circle"></i> Materiali: PLA, PETG, ABS, ASA, TPU, filamenti caricati carbonio</li>
                        </ul>
                        <!-- END CARATTERISTICHE -->

                        <!-- BEGIN PREREQUISITI -->
                        <div class="product-warranty">

                            <div class="pull-right btn btn-theme btn-xs"
                                 data-toggle="tooltip" data-trigger="hover"
                                 data-title="Per poter utilizzare il macchinario in autonomia, &egrave; necessario aver
                                            seguito il corso Hello World 3D Print! Visita la sezione 'Hello World' per conoscere
                                            la data del prossimo incontro!"
                                 data-placement="bottom" data-original-title="" title="">Hello World 3D Print</div>
                            <div><b>Requisiti utilizzo:</b></div>
                        </div>
                        <!-- END PREREQUISITI -->

                        <!-- BEGIN MATERIALE UTILE -->
                        <div class="product-warranty">
                            <div class="pull-right product-social">
                                <ul>
                                    <li><a href="https://www.elegoo.com/pages/download" class="pdf" data-toggle="tooltip" data-trigger="hover" data-title="Manuale" data-placement="bottom" data-original-title="" title=""><i class="fas fa-book"></i></a></li>
                                    <li><a href="https://github.com/elegooofficial/ElegooSlicer/releases" class="exe" data-toggle="tooltip" data-trigger="hover" data-title="ElegooSlicer" data-placement="bottom" data-original-title="" title=""><i class="fas fa-laptop"></i></a></li>
                                </ul>
                            </div>
                            <div><b>Link utili:</b></div>
                        </div>
                        <!-- END MATERIALE UTILE -->

                        <!-- BEGIN PREZZO -->
                        <div class="product-purchase-container">
                            <div class="product-price">
                                <div class="price">&euro; 5.00 / ora comprensivo di materiale</div>
                            </div>
                            <span class="btn btn-default btn-lg disabled" data-toggle="tooltip" data-trigger="hover" data-title="Presto disponibile" data-placement="bottom">PRENOTA</span>
                        </div>
                        <!-- END PREZZO -->
                    </div>
                    <!-- END product-info -->

                    <!-- BEGIN product-images -->
                    <div class="product-image">
                        <!-- BEGIN product-thumbnails -->
                        <div class="product-thumbnail">
                            <ul class="product-thumbnail-list">
                                <li class="active"><a href="#" data-click="show-main-image" data-url="/images/machines/elegoo/centauricarbon.png"><img src="/images/machines/elegoo/centauricarbon.png" alt=""></a></li>
                                <li><a href="#" data-click="show-main-image" data-url="/images/machines/elegoo/centauricarbon-1.jpg"><img src="/images/machines/elegoo/centauricarbon-1.jpg" alt=""></a></li>
                            </ul>
                        </div>
                        <!-- END product-thumbnails -->

                        <!-- BEGIN product-main-image -->
                        <div class="product-main-image" data-id="main-image">
                            <img src="/images/machines/elegoo/centauricarbon.png" alt="">
                        </div>
                        <!-- END product-main-image -->
                    </div>
                    <!-- END product-images -->


                </div>
                <!-- END product-detail -->

                <!-- BEGIN product-tab -->
                <div class="product-tab">

                    <!--
                    <ul id="product-tab" class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#product-materials" data-toggle="tab">Materiali</a></li>
                        <li class="nav-item"><a class="nav-link" href="#product-profiles" data-toggle="tab">Profili</a></li>
                        <li class="nav-item"><a class="nav-link" href="#product-faq" data-toggle="tab">F.A.Q.</a></li>
                    </ul> -->

                    <div id="product-tab-content" class="tab-content">
                        @include('frontend.pages.machines.creality._tab-materials')

                        @include('frontend.pages.machines.creality._tab-profiles')

                        @include('frontend.pages.machines.creality._tab-faq')
                    </div>

                </div>
                <!-- END product-tab -->
            </div>
            <!-- END product -->
        </div>
        <!-- end container -->

    </div>
@endsection
