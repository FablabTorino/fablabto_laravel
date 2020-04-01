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
        <!-- begin container
        <div class="container">
            <p class="content-desc">

            </p>

        </div> -->

        <div id="latest_mail">
            <p class="text-center">
                ... caricamento...
            </p>
        </div>
        <!-- end container -->

    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            if ($('#latest_mail').length != 0) {
                $.ajax({
                    url: 'https://cors-anywhere.herokuapp.com/https://us5.campaign-archive.com/feed?u=bbd5781f8c72a1885774d98c0&id=2ee26e2206',
                    method: 'GET',
                    beforeSend: function(xhr){
                        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                    },
                    success: function(data) {
                        var contents = $(data).find('item').first().find('description').html();
                        contents = contents.replace(/<style type="text\/css">[^<]*<\/style>/m, '');
                        $('#latest_mail').empty().append(contents);
                    }
                });
            }
        });
    </script>
@endpush
