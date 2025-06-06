<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Donazioni')

@section('content')

    <!-- Title section for pricing page -->
    <div id="donation" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-membership.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                Donazioni
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="donation" class="content extraPageContentLight" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <div class="quote">
                Vuoi sostenere il Fablab con una donazione? Ottimo!</div>
            <div class="content-desc">
                La tessera dell'Associazione Fablab Torino consente a tutti i soci di accedere al Fablab negli <a href="index.html#contact">
                    orari di apertura</a>, frequentare gratuitamente i corsi base <a href="helloworld">Hello World</a> e
                acquistare i crediti necessari per prenotare e utilizzare le <a href="index.html#machines">macchine</a>
                (1 credito = 1 euro. Trovi il numero di crediti necessari all'utilizzo nella pagina relativa alla macchina
                che ti interessa).<br />
                <br />
                <span class="text-highlight">La tessera include la copertura assicurativa ed &egrave; valida fino al 31 dicembre
            dell'anno di iscrizione.</span><br />
                <br />
                Se hai letto le <a href="faq">FAQ</a> e <a href="files/StatutoFablab.pdf">lo statuto</a>,  sei pronto per partire! Scegli la tessera che fa per te e diventa un fablabber!
            </div>


        </div>
        <!-- end container -->
    </div>

@endsection
