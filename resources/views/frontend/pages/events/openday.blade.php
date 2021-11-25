<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Open Day')

@section('content')

    <!-- Title section for history page -->
    <div id="openday" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
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
                Open Day
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="openday" class="content extraPageContentLight" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <p class="content-desc">
                Vuoi vedere il Fablab Torino con i tuoi occhi, toccare con mano le nostre macchine, fare due chiacchiere
                con noi di persona? </br>
                Passa a trovarci al nostro Open Day, <span class="text-highlight">ogni mercoledì dalle
                19.00 alle 20.00</span>.<br/>
                <strong class="text-danger"> Per partecipare all'Open Day &egrave;
                    necessario prenotare il proprio turno (in inglese o italiano) al seguente link:
                    <a href="https://www.eventbrite.it/e/214695679557">PRENOTA!</a>
                </strong>

            </p>

        </div>
        <!-- end container -->
    </div>

@endsection
