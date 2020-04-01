<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino')

@section('content')

    <!-- begin #home -->
    @include('frontend.pages._home')
    <!-- end #home -->

    <!-- begin #about -->
    @include('frontend.pages._about')
    <!-- end #about -->

    <!-- begin #machines -->
    @include('frontend.pages._machines')
    <!-- end #machines -->

    <!-- begin #contact -->
    @include('frontend.pages._contact')
    <!-- end #contact -->
@endsection
