<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Associazione')

@section('content')

    <!-- Title section for history page -->
    <div id="association" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-generic.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                L'Associazione
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <!-- begin #what -->
    @include('frontend.pages.association._what')
    <!-- end #what -->

    <!-- begin #charter -->
    @include('frontend.pages.association._charter')
    <!-- end #charter -->

    <!-- begin #team -->
    @include('frontend.pages.association._team')
    <!-- end #team -->




@endsection
