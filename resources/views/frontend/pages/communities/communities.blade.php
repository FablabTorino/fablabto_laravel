<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Community')

@section('content')

    <!-- Title section for history page -->
    <div id="communities" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(images/bg/bg-generic.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                Community
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="communities" class="content extraPageContentLight" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <div class="col-md-12 quote">
                Se vuoi incontrare altri smanettoni come te, sei nel posto giusto!</br>
            </div>
            <div class="content-desc">
                Le community del Fablab Torino sono nate spontaneamente e sono portate avanti dalla passione dei nostri
                makers. </br>
                Gli incontri sono serate informali in cui ognuno può proporre progetti da realizzare,
                condividere le proprie creazioni, chiedere un confronto o un consiglio, o semplicemente fare due chiacchiere.
            </div>
            <div class="col-md-12 quote">
                <!--span class="text-highlight" >Puoi partecipare anche se non sei tesserato e non è necessaria l'iscrizione:
                    vieni e buttati!</span -->
                <span class="text-highlight text-danger" >In questo momento gli incontri sono aperti solo ai soci tesserati.<br/>
                    Continua a seguirci per scoprire quando riapriranno al pubblico.</span>
            </div>

            <div class="col-md-12">


                    <!-- begin ROBOTSIDE -->
                    @include('frontend.pages.communities._robotside')
                    <!-- end ROBOTSIDE -->

                    <!-- begin AHL -->
                    @include('frontend.pages.communities._ahl')
                    <!-- end AHL -->

                    <!-- begin 3DPRINTER -->
                    @include('frontend.pages.communities._3dprint')
                    <!-- end 3DPRINTER -->

                    <!-- begin CODING MEETUP -->
                    @include('frontend.pages.communities._codingmeetup')
                    <!-- end CODING MEETUP -->

                    <!-- begin GAME OF DRONES -->
                    @include('frontend.pages.communities._god')
                    <!-- end GAME OF DRONES -->

                    <!-- begin AUG -->
                    @include('frontend.pages.communities._aug')
                    <!-- end AUG -->
            </div>

        </div>
        <!-- end container -->
    </div>



@endsection
