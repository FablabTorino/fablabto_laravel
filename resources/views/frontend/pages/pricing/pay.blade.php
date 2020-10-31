<?php
/**
 * Created by PhpStorm.
 * User: shad0w
 * Date: 09/07/2019
 * Time: 00:04
 */
?>

@extends('layouts.frontend')

@section('title', 'Fablab Torino | Pagamento')

@section('content')

    <!-- Title section for payment page -->
    <div id="pricing" class="content bg-black-darker has-bg extraPageTitle" data-scrollview="true">
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
                Pagamento
            </h2>
            <!-- end title -->
        </div>
        <!-- end container -->
    </div>
    <!-- end Title section -->

    <div id="pricing" class="content extraPageContentLight" data-scrollview="true">
        <!-- begin container -->
        <div class="container">
            <div class="quote">
                Ci siamo quasi! Questo &egrave l'ultimo step della <a href="http://bit.ly/fabToIscrizione18">procedura di iscrizione</a>
            </div>

            <div class="content-desc">
                Seleziona la tipologia di tessera e completa il pagamento!<br />
                <br />
                <span class="text-highlight">La tessera include la copertura assicurativa ed &egrave; valida fino al 31 dicembre
                dell'anno di iscrizione.</span><br />
            </div>

            <!-- begin row -->
            <div class="row machine_row center-desc">
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm4">
                    <div class="machine">
                        <!-- Tesseramento annuale - 1° trimestre ->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                          <input type="hidden" name="cmd" value="_s-xclick">
                          <input type="hidden" name="hosted_button_id" value="9PKN5FQPKF59S">
                          <table>
                            <tr><td><input type="hidden" name="on0" value="Tipologia di iscrizione">Tipologia di iscrizione</td></tr><tr><td><select name="os0">
                              <option value="Tesseramento Base">Tesseramento Base €100,00 EUR</option>
                              <option value="Tesseramento Studenti">Tesseramento Studenti €50,00 EUR</option>
                              <option value="Tesseramento Pro">Tesseramento Pro €500,00 EUR</option>
                            </select> </td></tr>
                          </table>
                          <input type="hidden" name="currency_code" value="EUR">
                          <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
                          <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
                        </form -->

                        <!-- Tesseramento annuale - 2° trimestre ->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                          <input type="hidden" name="cmd" value="_s-xclick">
                          <input type="hidden" name="hosted_button_id" value="YDWVMLCB76RY2">
                          <table>
                            <tr><td><input type="hidden" name="on0" value="Tipologia di iscrizione">Tipologia di iscrizione</td></tr><tr><td><select name="os0">
                              <option value="Tesseramento Base">Tesseramento Base €80,00 EUR</option>
                              <option value="Tesseramento Studenti">Tesseramento Studenti €40,00 EUR</option>
                              <option value="Tesseramento Pro">Tesseramento Pro €400,00 EUR</option>
                            </select> </td></tr>
                          </table>
                          <input type="hidden" name="currency_code" value="EUR">
                          <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
                          <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
                        </form-->

                        <!-- Tesseramento annuale - 3° trimestre ->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                          <input type="hidden" name="cmd" value="_s-xclick">
                          <input type="hidden" name="hosted_button_id" value="WYVD22RFJ3T4Y">
                          <table>
                            <tr><td><input type="hidden" name="on0" value="Tipologia di iscrizione">Tipologia di iscrizione</td></tr><tr><td><select name="os0">
                              <option value="Tesseramento Base">Tesseramento Base €60,00 EUR</option>
                              <option value="Tesseramento Studenti">Tesseramento Studenti €30,00 EUR</option>
                              <option value="Tesseramento Pro">Tesseramento Pro €300,00 EUR</option>
                            </select> </td></tr>
                          </table>
                          <input type="hidden" name="currency_code" value="EUR">
                          <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
                          <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
                        </form-->

                        <!-- Tesseramento annuale - 4° trimestre -->
                        <form id="form_action" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input id="form_cmd" type="hidden" name="cmd" value="_s-xclick">
                            <input id="form_hosted_btn_id" type="hidden" name="hosted_button_id" value="TLL7FYKCMRPD2">
                            <table style="width: 100%">
                                <tr>
                                    <td><input id="form_on0" type="hidden" name="on0" value="Tipologia di iscrizione">Tipologia di
                                        iscrizione
                                    </td>
                                </tr>
                                <tr>
                                    <td><select id="form_os0" name="os0" onchange="generateQr()">
                                            <option value="Tesseramento Base">Tesseramento Base €40,00 EUR</option>
                                            <option value="Tesseramento Studenti">Tesseramento Studenti €20,00 EUR
                                            </option>
                                            <option value="Tesseramento Pro">Tesseramento Pro €200,00 EUR</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <input id="form_currency" type="hidden" name="currency_code" value="EUR">
                            <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
                <!-- end col-4 -->

                <!-- begin col-4 FabCOINS - ->
                <div class="col-md-4 col-sm4">
                    <div class="machine">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="STJLNETJS3MR6">
                            <table style="width: 100%">
                                <tr><td><input type="hidden" name="on0" value="Fabcoin QTY">Fabcoin QTY</td></tr><tr><td><select name="os0">
                                            <option value="100 FabCoin">100 FabCoin €95,00 EUR</option>
                                            <option value="50 FabCoin">50 FabCoin €49,00 EUR</option>
                                            <option value="25 Fabcoin">25 Fabcoin €25,00 EUR</option>
                                        </select> </td></tr>
                            </table>
                            <input type="hidden" name="currency_code" value="EUR">
                            <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
                <! - end col-4 -->

                <!-- begin col-4 QRCodes -->
                <div class="col-md-4 col-sm4">
                    <div class="machine">
                        <h5>QR Code Paypal</h5>
                        <canvas id="qr_canvas"></canvas>
                    </div>
                </div>
                <!-- end col-4 -->

                <!-- begin col-4 QRCodes -->
                <div class="col-md-4 col-sm4">
                    <div class="machine">
                        <h5>Satispay</h5>
                        <canvas id="qr_canvas_2"></canvas>
                    </div>
                </div>
                <!-- end col-4 -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </div>

@endsection

@push('end_scripts')
    <script type="text/javascript">

    function generateQr() {
        var canvas = document.getElementById('qr_canvas');

        var qrData = document.getElementById("form_action").action  + '?' +
                  document.getElementById("form_cmd").name + '=' + document.getElementById("form_cmd").value +
            '&' + document.getElementById("form_hosted_btn_id").name + '=' + document.getElementById("form_hosted_btn_id").value +
            '&' + document.getElementById("form_on0").name + '=' + document.getElementById("form_on0").value.replace(/ /g, '+') +
            '&' + document.getElementById("form_os0").name + '=' + document.getElementById("form_os0").value.replace(/ /g, '+') +
            '&' + document.getElementById("form_currency").name + '=' + document.getElementById("form_currency").value  ;

        console.log(qrData);
        QRCode.toCanvas(canvas, qrData, { version: 9 }, function (error) {
            if (error)
                console.error(error)
        });
    }
    </script>

    <script>
        $(document).ready(function() {
           generateQr();

            var canvas2 = document.getElementById('qr_canvas_2');
            QRCode.toCanvas(canvas2, 'https://satispay.com/download/qrcode/S6Y-SHP-10AC9628-F752-4DE2-8485-6072DA83139B', { version: 9 }, function (error) {
                if (error)
                    console.error(error)
            });

        });
    </script>
@endpush
