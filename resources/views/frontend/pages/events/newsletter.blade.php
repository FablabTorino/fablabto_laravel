<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Newsletter')

@section('content')

    <!-- Title section for history page -->
    <div id="news" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
        <!-- begin content-bg -->
        <div class="content-bg" style="background-image: url(/images/bg/bg-letters.jpg)"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.01"
             data-paroller-factor-xs="0.01">
        </div>
        <!-- end content-bg -->
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInLeft">
            <!-- begin title -->
            <h2 class="content-title">
                Newsletter
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="news" class="content extraPageContentLight" data-scrollview="true">
        <div id="latest_mail">
            @php
            $api_key = env('SIB_API_KEY', '');
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Accept: application/json',
                'api-key: ' . $api_key
            ]);
            curl_setopt($curl, CURLOPT_URL, 'https://api.sendinblue.com/v3/emailCampaigns?limit=1&offset=0&sort=desc');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($curl);
            curl_close($curl);

            $latest_newsletter = json_decode($result);
            echo $latest_newsletter->campaigns[0]->htmlContent;

            @endphp
        </div>
    </div>

@endsection
