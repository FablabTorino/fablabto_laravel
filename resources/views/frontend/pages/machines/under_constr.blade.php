<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Coming Soon!')

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

            <img src="/images/under_constr.jpg">
        </div>
        <!-- end container -->

    </div>
@endsection
