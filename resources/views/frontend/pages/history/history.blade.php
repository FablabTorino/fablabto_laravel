<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | History')

@section('content')

    <!-- Title section for history page -->
    <div id="history" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-history.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                Fablab History
            </h2>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="history" class="content extraPageContent" data-scrollview="true">
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInDown">
            <!-- begin row -->
            <div class="row">
                <!-- begin timeline items -->
                <ul class="timeline">
                    @include('frontend.pages.history._2011')
                    @include('frontend.pages.history._2012')
                    @include('frontend.pages.history._2013')
                    @include('frontend.pages.history._2014')
                    @include('frontend.pages.history._2015')
                    @include('frontend.pages.history._2016')
                    @include('frontend.pages.history._2017')
                    @include('frontend.pages.history._2018')
                    @include('frontend.pages.history._2019')
                    @include('frontend.pages.history._2020')
                </ul>
                <!-- end timeline -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

@endsection
