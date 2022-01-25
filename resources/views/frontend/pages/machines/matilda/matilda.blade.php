<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Matilda')

@section('content')

    <!-- Title section for history page -->
    <div id="matilda" class="content bg-black-darker has-bg extraPageTitle titleSmall" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-generic.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
    </div>
    <!-- end Title section -->

    <div id="matilda" class="content extraPageContentGhost" data-scrollview="true">
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
                            <h1 class="product-title">Matilda</h1>
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
                            <li><i class="fa fa-circle"></i> Area di taglio: 120 x 90 cm</li>
                            <li><i class="fa fa-circle"></i> Altezza materiale lavorabile: 200mm</li>
                            <li><i class="fa fa-circle"></i> Spessore di taglio:  0-10mm</li>
                            <li><i class="fa fa-circle"></i> Risoluzione grafica: 0,0254mm (1000dpi)</li>
                            <li><i class="fa fa-circle"></i> Potenza laser: 120 watt CO2</li>
                            <li><i class="fa fa-circle"></i> Controller: Leetro MPC6585</li>
                        </ul>
                        <!-- END CARATTERISTICHE -->

                        <!-- BEGIN PREREQUISITI -->
                        <div class="product-warranty">

                            <div class="pull-right btn btn-theme btn-xs"
                                 data-toggle="tooltip" data-trigger="hover"
                                 data-title="Per poter utilizzare il macchinario in autonomia, &egrave; necessario aver
                                            seguito il corso Hello World LaserCut! Visita la sezione 'Hello World' per conoscere
                                            la data del prossimo incontro!"
                                 data-placement="bottom" data-original-title="" title="">Hello World LaserCut</div>
                            <div><b>Requisiti utilizzo:</b></div>
                        </div>
                        <!-- END PREREQUISITI -->

                        <!-- BEGIN MATERIALE UTILE -->
                        <div class="product-warranty">
                            <div class="pull-right product-social">
                                <ul>
                                    <li><a href="/files/matilda/MPC6585-HW-Manual-V1.4.pdf" class="pdf" data-toggle="tooltip" data-trigger="hover" data-title="Manuale Controller" data-placement="bottom" data-original-title="" title=""><i class="fas fa-file-pdf"></i></a></li>
                                    <li><a href="/files/matilda/Workline-Complete-Manual.pdf" class="pdf" data-toggle="tooltip" data-trigger="hover" data-title="Manuale Completo" data-placement="bottom" data-original-title="" title=""><i class="fas fa-file-pdf"></i></a></li>
                                    <li><a href="/files/matilda/LaserCut61.zip" class="exe" data-toggle="tooltip" data-trigger="hover" data-title="Software" data-placement="bottom" data-original-title="" title=""><i class="fas fa-laptop"></i></a></li>
                                    <li><a href="https://www.worklinestore.com/-/plotter-laser-co2-1300x900mm-wl1390" class="link" data-toggle="tooltip" data-trigger="hover" data-title="Sito Ufficiale" data-placement="bottom" data-original-title="" title=""><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div><b>Link utili:</b></div>
                        </div>
                        <!-- END MATERIALE UTILE -->

                        <!-- BEGIN PREZZO -->
                        <div class="product-purchase-container">
                            <div class="product-price">
                                <div class="price">&euro; 1.00 / min</div>
                            </div>
                            <a class="btn btn-theme btn-lg" type="submit" href="/booking">PRENOTA</a>
                        </div>
                        <!-- END PREZZO -->
                    </div>
                    <!-- END product-info -->

                    <!-- BEGIN product-images -->
                    <div class="product-image">
                        <!-- BEGIN product-thumbnails -->
                        <div class="product-thumbnail">
                            <ul class="product-thumbnail-list">
                                <li class="active"><a href="#" data-click="show-main-image" data-url="/images/machines/matilda/matilda.png"><img src="/images/machines/matilda/matilda.png" alt=""></a></li>
                                <li><a href="#" data-click="show-main-image" data-url="/images/machines/matilda/m1.jpg"><img src="/images/machines/matilda/m1.jpg" alt=""></a></li>
                                <li><a href="#" data-click="show-main-image" data-url="/images/machines/matilda/m2.jpg"><img src="/images/machines/matilda/m2.jpg" alt=""></a></li>
                                <li><a href="#" data-click="show-main-image" data-url="/images/machines/matilda/m3.jpg"><img src="/images/machines/matilda/m3.jpg" alt=""></a></li>
                                <li><a href="#" data-click="show-main-image" data-url="/images/machines/matilda/m4.jpg"><img src="/images/machines/matilda/m4.jpg" alt=""></a></li>
                            </ul>
                        </div>
                        <!-- END product-thumbnails -->

                        <!-- BEGIN product-main-image -->
                        <div class="product-main-image" data-id="main-image">
                            <img src="/images/machines/matilda/matilda.png" alt="">
                        </div>
                        <!-- END product-main-image -->
                    </div>
                    <!-- END product-images -->


                </div>
                <!-- END product-detail -->

                <!-- BEGIN product-tab -->
                <div class="product-tab">
                    <!-- BEGIN #product-tab -->
                    <ul id="product-tab" class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#product-materials" data-toggle="tab">Materiali</a></li>
                        <li class="nav-item"><a class="nav-link" href="#product-settings" data-toggle="tab">Pennini</a></li>
                        <li class="nav-item"><a class="nav-link" href="#product-faq" data-toggle="tab">F.A.Q.</a></li>
                    </ul>
                    <!-- END #product-tab -->

                    <!-- BEGIN #product-tab-content -->
                    <div id="product-tab-content" class="tab-content">

                        @include('frontend.pages.machines.matilda._tab-materials')

                        @include('frontend.pages.machines.matilda._tab-settings')

                        @include('frontend.pages.machines.matilda._tab-faq')


                    </div>
                    <!-- END #product-tab-content -->
                </div>
                <!-- END product-tab -->
            </div>
            <!-- END product -->
        </div>
        <!-- end container -->

    </div>
@endsection
