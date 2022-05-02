<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | 10 Years Birthday')

@section('content')

    <!-- Title section for history page -->
    <div id="birthday" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-open.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                Happy Bday Fablab Torino!
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="birthday" class="content extraPageContentLight" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <p class="content-desc">

                Quest’anno Fablab Torino compie 10 anni!</br>
                Il 7 Maggio sarà un pomeriggio per festeggiare insieme, parlare del Fablab che è stato e di quello che vorremmo.</br>
                Tanti gli appuntamenti imperdibili: un workshop gratuito, una mostra temporanea e un panelist di tutto rispetto.</br>
                Ma la serata non può che concludersi insieme: pasta fresca, musica live suonata per noi da La Revancha con Deixa Falar e Nodef e qualche immancabile birretta!</br>
                </br>
                Qui di seguito trovi il programma completo dell'evento!</br>
            </p>
            <div class="table-responsive">
                <!-- BEGIN table-product -->
                <table class="table table-product table-hover">
                    <thead>
                    <tr>
                        <th>Orario</th>
                        <th>Evento</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td class="auto">14.00</td>
                        <td class="auto">Apertura porte</td>
                    </tr>

                    <tr>
                        <td class="auto">14.00-23.00</td>
                        <td class="auto">Mostra 10x10 - 10 Anni di Fablab in 10 progetti</td>
                    </tr>

                    <tr>
                        <td class="auto">14.00-17.00</td>
                        <td class="auto">Workshop con Gianluca Pugliese + FelFil - Stampa 3D con materiali riciclati</td>
                    </tr>

                    <tr>
                        <td class="auto">15.00</td>
                        <td class="auto">Marco Cassino - Talk di introduzione</td>
                    </tr>

                    <tr>
                        <td class="auto">15.35</td>
                        <td class="auto">Nando, Pipein, Buskercase - Fablab &amp; Startups</td>
                    </tr>

                    <tr>
                        <td class="auto">16.20</td>
                        <td class="auto">Paola Zini - Imparare a fare</td>
                    </tr>

                    <tr>
                        <td class="auto">16.55</td>
                        <td class="auto">Massimo Banzi - Presente e futuro del Physical Computing</td>
                    </tr>

                    <tr>
                        <td class="auto">17.30</td>
                        <td class="auto">Panel Fablab e Makpi - Fare sistema per crescere</td>
                    </tr>

                    <tr>
                        <td class="auto">18.00</td>
                        <td class="auto">Live Federico Uffreducci x Buskercase</td>
                    </tr>

                    <tr>
                        <td class="auto">18.30</td>
                        <td class="auto">DJ Set, food &amp; drinks</td>
                    </tr>

                    </tbody>
                </table>
                <!-- END table-product -->

            </div>
            <!-- END table-responsive -->
        </div>
        <!-- end container -->
    </div>

@endsection
