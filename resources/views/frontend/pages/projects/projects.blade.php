<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Progetti')

@section('content')

    <!-- Title section for projects page -->
    <div id="projects" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(images/bg/bg-projects.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                Progetti
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <!-- begin #projects list -->
    <div id="projects" class="content extraPageContentGhost" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <div class="col-md-12">

                <!-- begin card-columns -->
                <div class="card-columns">

                    <!-- begin PIEZOPINZA -->
                    @include('frontend.pages.projects._piezopinza')
                    <!-- end PIEZOPINZA -->

                    <!-- begin ESPTELEGRAMSTATS -->
                    @include('frontend.pages.projects._esptelegramstats')
                    <!-- end ESPTELEGRAMSTATS -->

                    <!-- begin SPASSOUNO -->
                    @include('frontend.pages.projects._spassouno')
                    <!-- end SPASSOUNO -->

                    <!-- begin SELFOMATIC -->
                    @include('frontend.pages.projects._selfomatic')
                    <!-- end SELFOMATIC -->

                </div>
                <!-- end card-columns -->
            </div>

        </div>
        <!-- end container -->
    </div>
    <!-- end #project list -->

@endsection
