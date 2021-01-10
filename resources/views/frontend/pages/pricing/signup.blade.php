<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Form di Iscrizione')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://anp.winddoc.com/theme/default/css/my_bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://anp.winddoc.com/theme/default/css/font.css">
    <link rel="stylesheet" type="text/css" href="https://anp.winddoc.com/theme/default/css/style_pro.css">
@endpush

@push('head_scripts')
    <script src="https://anp.winddoc.com/utility/javascript/form.js?v=1.238" type="text/javascript"></script>
@endpush

@section('content')

    <!-- Title section for pricing page -->
    <div id="signup" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
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
                Procedura d'iscrizione
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="signup" class="content extraPageContentLight" data-scrollview="true">
        <iframe src="https://anp.winddoc.com/short/2xs/" width="100%" height="2000px"></iframe>
        <!-- begin container -->
        <div class="container">


        </div>
        <!-- end container -->
    </div>

@endsection
