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
        <!-- begin subscribe -->
        <div class="container newsletter-subscribe">
            <div class="content-desc">
                Le news del Fablab Torino arrivano con la nostra <span class="text-highlight">newsletter</span>:
                qui sotto trovi l'ultima che abbiamo inviato.<br/>
                Per riceverle direttamente nella tua casella, inserisci la tua email e clicca su INVIA!
            </div>
            @include('frontend.includes.newsletter-form')
        </div>
        <!-- end subscribe -->

        <div id="latest_mail">
            @php
            // Latest sent campaign from Brevo, cached so every page view does not hit the API
            $latest_newsletter = Illuminate\Support\Facades\Cache::remember('latest_newsletter', 600, function () {
                try {
                    return Illuminate\Support\Facades\Http::timeout(5)
                        ->acceptJson()
                        ->withHeaders(['api-key' => (string) config('services.brevo.key')])
                        ->get('https://api.brevo.com/v3/emailCampaigns', [
                            'status' => 'sent', 'limit' => 1, 'offset' => 0, 'sort' => 'desc',
                        ])
                        ->json('campaigns.0.htmlContent');
                } catch (\Throwable $e) {
                    report($e);
                    return null;
                }
            });
            @endphp
            {!! $latest_newsletter !!}
        </div>
    </div>

@endsection
