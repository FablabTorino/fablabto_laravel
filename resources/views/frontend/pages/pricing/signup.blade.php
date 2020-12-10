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
        <!-- begin container -->
        <div class="container">

            <section class="form">
                <form action="https://anp.winddoc.com//" autocomplete="off" method="post" id="form_253482879"
                      class="form_style_1 has-validation-callback" onsubmit="return false;">
                    <div id="table1" class="row">
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="box box-primary" id="table1_1col11">
                                    <div class="box-header with-border"><h1 class="box-title">Dati Anagrafici</h1>
                                        <div class="box-tools pull-right mobile-show">
                                            <button class="btn btn-box-tool collapse" type="button"
                                                    onclick="collapse_mobile('table1_1col11')"><i
                                                    class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group"><label>Nome : </label><input style="" id="text_id_nome"
                                                                                             type="text" name="nome"
                                                                                             value="" placeholder=""
                                                                                             data-validation=" required"
                                                                                             class="form-control"></div>
                                        <div class="form-group"><label>Cognome : </label><input style=""
                                                                                                id="text_id_cognome"
                                                                                                type="text"
                                                                                                name="cognome" value=""
                                                                                                placeholder=""
                                                                                                data-validation=" required"
                                                                                                class="form-control">
                                        </div>
                                        <div class="form-group"><label>Carica / Tipologia Socio : </label><select
                                                id="id_carica_socio1607634034" style="" name="id_carica_socio"
                                                data-validation="required " tabindex="-1"
                                                class="select2-hidden-accessible" aria-hidden="true">
                                                <option value="">&nbsp;</option>
                                                <option value="2e272031-b266-5a79-84c3-5f3e54a9f48d">Tessera Base
                                                </option>
                                                <option value="26852317-6c3e-0fbf-f9f0-5f3e5450cc74">Tessera Studenti
                                                </option>
                                                <option value="256fb9a5-7f5f-41f5-b44d-5f3e545f55b7">Tessera Maker
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" style="width: 153px;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0"
                                                        aria-labelledby="select2-id_carica_socio1607634034-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-id_carica_socio1607634034-container"
                                                            title="&nbsp;">&nbsp;</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>

                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    var valueid_carica_socio1607634034 = "";
                                                    $("select#id_carica_socio1607634034").select2()
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group" style="text-transform: uppercase"><label>Codice Fiscale
                                                : </label><input style="text-transform: uppercase"
                                                                 id="text_id_codice_fiscale" type="text"
                                                                 name="codice_fiscale" value="" placeholder=""
                                                                 data-validation=" required length"
                                                                 data-validation-optional="false"
                                                                 data-validation-length="16" class="form-control"></div>
                                        <div class="form-group"><label>Email : </label><input style=""
                                                                                              id="text_id_email"
                                                                                              type="text" name="email"
                                                                                              value="" placeholder=""
                                                                                              data-validation="email required"
                                                                                              class="form-control">
                                        </div>
                                        <div class="form-group"><label>Cellulare : </label><input style=""
                                                                                                  id="text_id_cellulare"
                                                                                                  type="text"
                                                                                                  name="cellulare"
                                                                                                  value=""
                                                                                                  placeholder=""
                                                                                                  data-validation=" required"
                                                                                                  class="form-control">
                                        </div>
                                        <div class="form-group"><label>Data di nascita : </label><span
                                                class="Zebra_DatePicker_Icon_Wrapper"
                                                style="display: block; position: relative; float: none; inset: auto; margin: 0px; padding: 0px; width: 343px;"><input
                                                    style="position: relative; float: none; inset: auto; margin: 0px; padding-right: 36px;"
                                                    id="date_id_data_nascita1607634034" type="text" name="data_nascita"
                                                    value="" data-validation="date required"
                                                    data-validation-format="dd/mm/yyyy" class="form-control"><button
                                                    type="button" class="Zebra_DatePicker_Icon"
                                                    style="top: 9.75px; right: 10px;">Pick a date</button></span>

                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $("#date_id_data_nascita1607634034").Zebra_DatePicker({
                                                        format: "d/m/Y",
                                                        readonly_element: false,
                                                        "days": ["Domenica", "Lunedì", "Marted'", "Mercoledì", "Giovedì", "Venerdì", "Sabato"],
                                                        "months": ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
                                                        "lang_clear_date": "Cancella",
                                                        "show_select_today": "Oggi"
                                                        , onSelect: function (view, elements) {
                                                            cambia_data_nascita()
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group"><label>Nazione di nascita : </label><select
                                                id="nazione_nascita1607634034" style="" name="nazione_nascita"
                                                data-validation="required " tabindex="-1"
                                                class="select2-hidden-accessible" aria-hidden="true">
                                                <option value="AL">ALBANIA</option>
                                                <option value="DZ">ALGERIA</option>
                                                <option value="AD">ANDORRA</option>
                                                <option value="AO">ANGOLA</option>
                                                <option value="AI">ANGUILLA</option>
                                                <option value="TF">ANTARTIDE FRANCESE</option>
                                                <option value="AG">ANTIGUA/BARBUDA</option>
                                                <option value="AN">ANTILLE OLANDESI</option>
                                                <option value="SA">ARABIA SAUDITA</option>
                                                <option value="CK">ARCIPELAGO DI COOK</option>
                                                <option value="AR">ARGENTINA</option>
                                                <option value="AM">ARMENIA</option>
                                                <option value="AW">ARUBA</option>
                                                <option value="SH">ASCENSION</option>
                                                <option value="AU">AUSTRALIA</option>
                                                <option value="AT">AUSTRIA</option>
                                                <option value="AZ">AZERBAIGIAN</option>
                                                <option value="BS">BAHAMA</option>
                                                <option value="BH">BAHREIN</option>
                                                <option value="BD">BANGLADESH</option>
                                                <option value="BB">BARBADOS</option>
                                                <option value="BE">BELGIO</option>
                                                <option value="BZ">BELIZE</option>
                                                <option value="BJ">BENIN</option>
                                                <option value="BM">BERMUDE</option>
                                                <option value="BT">BHUTAN</option>
                                                <option value="BY">BIELORUSSIA</option>
                                                <option value="BO">BOLIVIA</option>
                                                <option value="BA">BOSNIA-ERZEGOVINA</option>
                                                <option value="BW">BOTSWANA</option>
                                                <option value="BR">BRASILE</option>
                                                <option value="BN">BRUNEI</option>
                                                <option value="BG">BULGARIA</option>
                                                <option value="BF">BURKINA FASO</option>
                                                <option value="BI">BURUNDI</option>
                                                <option value="KH">CAMBOGIA</option>
                                                <option value="CM">CAMERUN</option>
                                                <option value="CA">CANADA</option>
                                                <option value="KY">CAYMAN</option>
                                                <option value="CF">CENTRAFRICA</option>
                                                <option value="TD">CIAD</option>
                                                <option value="CL">CILE</option>
                                                <option value="CN">CINA</option>
                                                <option value="CV">CIPRO</option>
                                                <option value="CY">CIPRO</option>
                                                <option value="VA">CITTA' DEL VATICANO</option>
                                                <option value="CO">COLOMBIA</option>
                                                <option value="KM">COMORE</option>
                                                <option value="KP">COREA DEL NORD</option>
                                                <option value="KR">COREA DEL SUD</option>
                                                <option value="CI">COSTA D'AVORIO</option>
                                                <option value="CR">COSTA RICA</option>
                                                <option value="HR">CROAZIA</option>
                                                <option value="CU">CUBA</option>
                                                <option value="DK">DANIMARCA</option>
                                                <option value="DM">DOMINICA</option>
                                                <option value="EC">ECUADOR</option>
                                                <option value="EG">EGITTO</option>
                                                <option value="AE">EMIRATI ARABI UNITI</option>
                                                <option value="ER">ERITREA</option>
                                                <option value="EE">ESTONIA</option>
                                                <option value="ET">ETIOPIA</option>
                                                <option value="PH">FILIPPINE</option>
                                                <option value="FI">FINLANDIA</option>
                                                <option value="FR">FRANCIA</option>
                                                <option value="GA">GABON</option>
                                                <option value="GM">GAMBIA</option>
                                                <option value="GE">GEORGIA</option>
                                                <option value="GS">GEORGIA DEL SUD</option>
                                                <option value="DE">GERMANIA</option>
                                                <option value="GH">GHANA</option>
                                                <option value="JM">GIAMAICA</option>
                                                <option value="JP">GIAPPONE</option>
                                                <option value="GI">GIBILTERRA</option>
                                                <option value="DJ">GIBUTI</option>
                                                <option value="JO">GIORDANIA</option>
                                                <option value="GB">GRAN BRETAGNA</option>
                                                <option value="GR">GRECIA</option>
                                                <option value="GD">GRENADA</option>
                                                <option value="GL">GROENLANDIA</option>
                                                <option value="GP">GUADALUPA</option>
                                                <option value="GU">GUAM</option>
                                                <option value="GT">GUATEMALA</option>
                                                <option value="GY">GUIANA</option>
                                                <option value="GF">GUIANA FRANCESE</option>
                                                <option value="GQ">GUINEA EQUATORIALE</option>
                                                <option value="GW">GUINEA-BISSAU</option>
                                                <option value="HT">HAITI</option>
                                                <option value="HN">HONDURAS</option>
                                                <option value="HK">HONG KONG</option>
                                                <option value="IN">INDIA</option>
                                                <option value="ID">INDONESIA</option>
                                                <option value="IR">IRAN</option>
                                                <option value="IQ">IRAQ</option>
                                                <option value="IE">IRLANDA</option>
                                                <option value="IS">ISLANDA</option>
                                                <option value="NF">ISOLA DI NORFOLK</option>
                                                <option value="CX">ISOLE CHRISTMAS</option>
                                                <option value="CC">ISOLE COCOS</option>
                                                <option value="FO">ISOLE FAEROER</option>
                                                <option value="FK">ISOLE FALKLAND</option>
                                                <option value="FJ">ISOLE FIGI</option>
                                                <option value="MP">ISOLE MARIANNE</option>
                                                <option value="MH">ISOLE MARSHALL</option>
                                                <option value="UM">ISOLE MINORI (USA)</option>
                                                <option value="PW">ISOLE PALAU</option>
                                                <option value="SB">ISOLE SALOMONE</option>
                                                <option value="TK">ISOLE TOKELAU</option>
                                                <option value="VG">ISOLE VERGINI (BRIT</option>
                                                <option value="VI">ISOLE VERGINI (USA)</option>
                                                <option value="IL">ISRAELE</option>
                                                <option value="IT" selected="selected">ITALIA</option>
                                                <option value="KZ">KAZAKISTAN</option>
                                                <option value="KE">KENYA</option>
                                                <option value="KG">KIRGHIZISTAN</option>
                                                <option value="KI">KIRIBATI</option>
                                                <option value="XZ">KOSOVO</option>
                                                <option value="KW">KUWAIT</option>
                                                <option value="LA">LAOS</option>
                                                <option value="LS">LESOTHO</option>
                                                <option value="LV">LETTONIA</option>
                                                <option value="LB">LIBANO</option>
                                                <option value="LR">LIBERIA</option>
                                                <option value="LY">LIBIA</option>
                                                <option value="LI">LIECHTENSTEIN</option>
                                                <option value="LT">LITUANIA</option>
                                                <option value="LU">LUSSEMBURGO</option>
                                                <option value="MO">MACAO</option>
                                                <option value="MK">MACEDONIA</option>
                                                <option value="MG">MADAGASCAR</option>
                                                <option value="MY">MALAISIA</option>
                                                <option value="MW">MALAWI</option>
                                                <option value="MV">MALDIVE</option>
                                                <option value="ML">MALI</option>
                                                <option value="MT">MALTA</option>
                                                <option value="MA">MAROCCO</option>
                                                <option value="MQ">MARTINICA</option>
                                                <option value="MR">MAURITANIA</option>
                                                <option value="MU">MAURIZIO</option>
                                                <option value="YT">MAYOTTE</option>
                                                <option value="MX">MESSICO</option>
                                                <option value="MD">MOLDAVIA</option>
                                                <option value="MN">MONGOLIA</option>
                                                <option value="MC">MONTECARLO</option>
                                                <option value="MS">MONTSERRAT</option>
                                                <option value="MZ">MOZAMBICO</option>
                                                <option value="MM">MYANMAR (UNIONE)</option>
                                                <option value="NA">NAMIBIA</option>
                                                <option value="NR">NAURU</option>
                                                <option value="NP">NEPAL</option>
                                                <option value="NI">NICARAGUA</option>
                                                <option value="NE">NIGER</option>
                                                <option value="NG">NIGERIA</option>
                                                <option value="NO">NORVEGIA</option>
                                                <option value="NC">NUOVA CALEDONIA</option>
                                                <option value="NZ">NUOVA ZELANDA</option>
                                                <option value="NL">OLANDA</option>
                                                <option value="OM">OMAN</option>
                                                <option value="PK">PAKISTAN</option>
                                                <option value="PA">PANAMA</option>
                                                <option value="PG">PAPUA-NUOVA GUINEA</option>
                                                <option value="PY">PARAGUAY</option>
                                                <option value="PE">PERU'</option>
                                                <option value="PN">PITCAIRN</option>
                                                <option value="PF">POLINESIA FRANCESE</option>
                                                <option value="PL">POLONIA</option>
                                                <option value="PT">PORTOGALLO</option>
                                                <option value="PR">PORTORICO</option>
                                                <option value="QA">QATAR</option>
                                                <option value="CD">REP. DEMOCRATICA CO</option>
                                                <option value="CZ">REPUBBLICA CECA</option>
                                                <option value="CG">REPUBBLICA DEL CONG</option>
                                                <option value="GN">REPUBBLICA DI GUINE</option>
                                                <option value="DO">REPUBBLICA DOMINICA</option>
                                                <option value="SK">REPUBBLICA SLOVACCA</option>
                                                <option value="RE">REUNION</option>
                                                <option value="RO">ROMANIA</option>
                                                <option value="RW">RUANDA</option>
                                                <option value="RU">RUSSIA</option>
                                                <option value="VC">SAINT VINCENT E GRE</option>
                                                <option value="PM">SAINT-PIERRE ET MIQ</option>
                                                <option value="SV">SALVADOR</option>
                                                <option value="AS">SAMOA (USA)</option>
                                                <option value="WS">SAMOA OCCIDENTALI</option>
                                                <option value="KN">SAN CRISTOFORO E NE</option>
                                                <option value="SM">SAN MARINO</option>
                                                <option value="LC">SANTA LUCIA</option>
                                                <option value="ST">SAO TOME' E PRINCIPE</option>
                                                <option value="SN">SENEGAL</option>
                                                <option value="YU">SERBIA E MONTENEGRO</option>
                                                <option value="SC">SEYCHELLES</option>
                                                <option value="SL">SIERRA LEONE</option>
                                                <option value="SG">SINGAPORE</option>
                                                <option value="SY">SIRIA</option>
                                                <option value="SI">SLOVENIA</option>
                                                <option value="SO">SOMALIA</option>
                                                <option value="ES">SPAGNA</option>
                                                <option value="LK">SRI LANKA</option>
                                                <option value="US">STATI UNITI D'AMERICA</option>
                                                <option value="ZA">SUD AFRICA</option>
                                                <option value="SD">SUDAN</option>
                                                <option value="SR">SURINAME</option>
                                                <option value="SE">SVEZIA</option>
                                                <option value="CH">SVIZZERA</option>
                                                <option value="SZ">SWAZILAND</option>
                                                <option value="TJ">TAGISKISTAN</option>
                                                <option value="TH">TAILANDIA</option>
                                                <option value="TW">TAIWAN</option>
                                                <option value="TZ">TANZANIA</option>
                                                <option value="TP">TIMOR ORIENTALE</option>
                                                <option value="TG">TOGO</option>
                                                <option value="TO">TONGA</option>
                                                <option value="TT">TRINIDAD E TOBAGO</option>
                                                <option value="TN">TUNISIA</option>
                                                <option value="TR">TURCHIA</option>
                                                <option value="TM">TURKMENISTAN</option>
                                                <option value="TC">TURKS E CAICOS</option>
                                                <option value="TV">TUVALU</option>
                                                <option value="UA">UCRAINA</option>
                                                <option value="UG">UGANDA</option>
                                                <option value="HU">UNGHERIA</option>
                                                <option value="SU">UNIONE SOVIETICA</option>
                                                <option value="UY">URUGUAY</option>
                                                <option value="UZ">UZBEKISTAN</option>
                                                <option value="VU">VANUATU</option>
                                                <option value="VE">VENEZUELA</option>
                                                <option value="VN">VIETNAM</option>
                                                <option value="WF">WALLIS E FUTUNA</option>
                                                <option value="YE">YEMEN</option>
                                                <option value="ZR">ZAIRE</option>
                                                <option value="ZM">ZAMBIA</option>
                                                <option value="ZW">ZIMBABWE</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" style="width: 203px;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0"
                                                        aria-labelledby="select2-nazione_nascita1607634034-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-nazione_nascita1607634034-container"
                                                            title="ITALIA">ITALIA</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>

                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    var valuenazione_nascita1607634034 = "";
                                                    $("select#nazione_nascita1607634034").select2()
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group"><label>Città di nascita : </label><input style=""
                                                                                                         id="text_id_citta_nascita"
                                                                                                         type="text"
                                                                                                         name="citta_nascita"
                                                                                                         value=""
                                                                                                         placeholder=""
                                                                                                         data-validation=" required"
                                                                                                         class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="box box-primary" id="table1_1col22">
                                    <div class="box-header with-border"><h1 class="box-title">Indirizzo di
                                            Residenza</h1>
                                        <div class="box-tools pull-right mobile-show">
                                            <button class="btn btn-box-tool collapse" type="button"
                                                    onclick="collapse_mobile('table1_1col22')"><i
                                                    class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group"><label>Indirizzo : </label><input style=""
                                                                                                  id="text_id_indirizzo_via"
                                                                                                  type="text"
                                                                                                  name="indirizzo_via"
                                                                                                  value=""
                                                                                                  placeholder=""
                                                                                                  data-validation=" required"
                                                                                                  class="form-control">
                                        </div>
                                        <div class="form-group"><label>Città : </label><input style=""
                                                                                              id="text_id_indirizzo_citta"
                                                                                              type="text"
                                                                                              name="indirizzo_citta"
                                                                                              value="" placeholder=""
                                                                                              data-validation=" required"
                                                                                              class="form-control">
                                        </div>
                                        <div class="form-group"><label>CAP : </label><input style=""
                                                                                            id="text_id_indirizzo_cap"
                                                                                            type="text"
                                                                                            name="indirizzo_cap"
                                                                                            value="" placeholder=""
                                                                                            data-validation=" required"
                                                                                            class="form-control"></div>
                                        <div class="form-group"><label>Provincia : </label><input style=""
                                                                                                  id="text_id_indirizzo_provincia"
                                                                                                  type="text"
                                                                                                  name="indirizzo_provincia"
                                                                                                  value=""
                                                                                                  placeholder=""
                                                                                                  data-validation=" required"
                                                                                                  class="form-control">
                                        </div>
                                        <div class="form-group"><label>Nazione : </label><select
                                                id="indirizzo_nazione1607634034" style="" name="indirizzo_nazione"
                                                data-validation="required " tabindex="-1"
                                                class="select2-hidden-accessible" aria-hidden="true">
                                                <option value="AL">ALBANIA</option>
                                                <option value="DZ">ALGERIA</option>
                                                <option value="AD">ANDORRA</option>
                                                <option value="AO">ANGOLA</option>
                                                <option value="AI">ANGUILLA</option>
                                                <option value="TF">ANTARTIDE FRANCESE</option>
                                                <option value="AG">ANTIGUA/BARBUDA</option>
                                                <option value="AN">ANTILLE OLANDESI</option>
                                                <option value="SA">ARABIA SAUDITA</option>
                                                <option value="CK">ARCIPELAGO DI COOK</option>
                                                <option value="AR">ARGENTINA</option>
                                                <option value="AM">ARMENIA</option>
                                                <option value="AW">ARUBA</option>
                                                <option value="SH">ASCENSION</option>
                                                <option value="AU">AUSTRALIA</option>
                                                <option value="AT">AUSTRIA</option>
                                                <option value="AZ">AZERBAIGIAN</option>
                                                <option value="BS">BAHAMA</option>
                                                <option value="BH">BAHREIN</option>
                                                <option value="BD">BANGLADESH</option>
                                                <option value="BB">BARBADOS</option>
                                                <option value="BE">BELGIO</option>
                                                <option value="BZ">BELIZE</option>
                                                <option value="BJ">BENIN</option>
                                                <option value="BM">BERMUDE</option>
                                                <option value="BT">BHUTAN</option>
                                                <option value="BY">BIELORUSSIA</option>
                                                <option value="BO">BOLIVIA</option>
                                                <option value="BA">BOSNIA-ERZEGOVINA</option>
                                                <option value="BW">BOTSWANA</option>
                                                <option value="BR">BRASILE</option>
                                                <option value="BN">BRUNEI</option>
                                                <option value="BG">BULGARIA</option>
                                                <option value="BF">BURKINA FASO</option>
                                                <option value="BI">BURUNDI</option>
                                                <option value="KH">CAMBOGIA</option>
                                                <option value="CM">CAMERUN</option>
                                                <option value="CA">CANADA</option>
                                                <option value="KY">CAYMAN</option>
                                                <option value="CF">CENTRAFRICA</option>
                                                <option value="TD">CIAD</option>
                                                <option value="CL">CILE</option>
                                                <option value="CN">CINA</option>
                                                <option value="CV">CIPRO</option>
                                                <option value="CY">CIPRO</option>
                                                <option value="VA">CITTA' DEL VATICANO</option>
                                                <option value="CO">COLOMBIA</option>
                                                <option value="KM">COMORE</option>
                                                <option value="KP">COREA DEL NORD</option>
                                                <option value="KR">COREA DEL SUD</option>
                                                <option value="CI">COSTA D'AVORIO</option>
                                                <option value="CR">COSTA RICA</option>
                                                <option value="HR">CROAZIA</option>
                                                <option value="CU">CUBA</option>
                                                <option value="DK">DANIMARCA</option>
                                                <option value="DM">DOMINICA</option>
                                                <option value="EC">ECUADOR</option>
                                                <option value="EG">EGITTO</option>
                                                <option value="AE">EMIRATI ARABI UNITI</option>
                                                <option value="ER">ERITREA</option>
                                                <option value="EE">ESTONIA</option>
                                                <option value="ET">ETIOPIA</option>
                                                <option value="PH">FILIPPINE</option>
                                                <option value="FI">FINLANDIA</option>
                                                <option value="FR">FRANCIA</option>
                                                <option value="GA">GABON</option>
                                                <option value="GM">GAMBIA</option>
                                                <option value="GE">GEORGIA</option>
                                                <option value="GS">GEORGIA DEL SUD</option>
                                                <option value="DE">GERMANIA</option>
                                                <option value="GH">GHANA</option>
                                                <option value="JM">GIAMAICA</option>
                                                <option value="JP">GIAPPONE</option>
                                                <option value="GI">GIBILTERRA</option>
                                                <option value="DJ">GIBUTI</option>
                                                <option value="JO">GIORDANIA</option>
                                                <option value="GB">GRAN BRETAGNA</option>
                                                <option value="GR">GRECIA</option>
                                                <option value="GD">GRENADA</option>
                                                <option value="GL">GROENLANDIA</option>
                                                <option value="GP">GUADALUPA</option>
                                                <option value="GU">GUAM</option>
                                                <option value="GT">GUATEMALA</option>
                                                <option value="GY">GUIANA</option>
                                                <option value="GF">GUIANA FRANCESE</option>
                                                <option value="GQ">GUINEA EQUATORIALE</option>
                                                <option value="GW">GUINEA-BISSAU</option>
                                                <option value="HT">HAITI</option>
                                                <option value="HN">HONDURAS</option>
                                                <option value="HK">HONG KONG</option>
                                                <option value="IN">INDIA</option>
                                                <option value="ID">INDONESIA</option>
                                                <option value="IR">IRAN</option>
                                                <option value="IQ">IRAQ</option>
                                                <option value="IE">IRLANDA</option>
                                                <option value="IS">ISLANDA</option>
                                                <option value="NF">ISOLA DI NORFOLK</option>
                                                <option value="CX">ISOLE CHRISTMAS</option>
                                                <option value="CC">ISOLE COCOS</option>
                                                <option value="FO">ISOLE FAEROER</option>
                                                <option value="FK">ISOLE FALKLAND</option>
                                                <option value="FJ">ISOLE FIGI</option>
                                                <option value="MP">ISOLE MARIANNE</option>
                                                <option value="MH">ISOLE MARSHALL</option>
                                                <option value="UM">ISOLE MINORI (USA)</option>
                                                <option value="PW">ISOLE PALAU</option>
                                                <option value="SB">ISOLE SALOMONE</option>
                                                <option value="TK">ISOLE TOKELAU</option>
                                                <option value="VG">ISOLE VERGINI (BRIT</option>
                                                <option value="VI">ISOLE VERGINI (USA)</option>
                                                <option value="IL">ISRAELE</option>
                                                <option value="IT" selected="selected">ITALIA</option>
                                                <option value="KZ">KAZAKISTAN</option>
                                                <option value="KE">KENYA</option>
                                                <option value="KG">KIRGHIZISTAN</option>
                                                <option value="KI">KIRIBATI</option>
                                                <option value="XZ">KOSOVO</option>
                                                <option value="KW">KUWAIT</option>
                                                <option value="LA">LAOS</option>
                                                <option value="LS">LESOTHO</option>
                                                <option value="LV">LETTONIA</option>
                                                <option value="LB">LIBANO</option>
                                                <option value="LR">LIBERIA</option>
                                                <option value="LY">LIBIA</option>
                                                <option value="LI">LIECHTENSTEIN</option>
                                                <option value="LT">LITUANIA</option>
                                                <option value="LU">LUSSEMBURGO</option>
                                                <option value="MO">MACAO</option>
                                                <option value="MK">MACEDONIA</option>
                                                <option value="MG">MADAGASCAR</option>
                                                <option value="MY">MALAISIA</option>
                                                <option value="MW">MALAWI</option>
                                                <option value="MV">MALDIVE</option>
                                                <option value="ML">MALI</option>
                                                <option value="MT">MALTA</option>
                                                <option value="MA">MAROCCO</option>
                                                <option value="MQ">MARTINICA</option>
                                                <option value="MR">MAURITANIA</option>
                                                <option value="MU">MAURIZIO</option>
                                                <option value="YT">MAYOTTE</option>
                                                <option value="MX">MESSICO</option>
                                                <option value="MD">MOLDAVIA</option>
                                                <option value="MN">MONGOLIA</option>
                                                <option value="MC">MONTECARLO</option>
                                                <option value="MS">MONTSERRAT</option>
                                                <option value="MZ">MOZAMBICO</option>
                                                <option value="MM">MYANMAR (UNIONE)</option>
                                                <option value="NA">NAMIBIA</option>
                                                <option value="NR">NAURU</option>
                                                <option value="NP">NEPAL</option>
                                                <option value="NI">NICARAGUA</option>
                                                <option value="NE">NIGER</option>
                                                <option value="NG">NIGERIA</option>
                                                <option value="NO">NORVEGIA</option>
                                                <option value="NC">NUOVA CALEDONIA</option>
                                                <option value="NZ">NUOVA ZELANDA</option>
                                                <option value="NL">OLANDA</option>
                                                <option value="OM">OMAN</option>
                                                <option value="PK">PAKISTAN</option>
                                                <option value="PA">PANAMA</option>
                                                <option value="PG">PAPUA-NUOVA GUINEA</option>
                                                <option value="PY">PARAGUAY</option>
                                                <option value="PE">PERU'</option>
                                                <option value="PN">PITCAIRN</option>
                                                <option value="PF">POLINESIA FRANCESE</option>
                                                <option value="PL">POLONIA</option>
                                                <option value="PT">PORTOGALLO</option>
                                                <option value="PR">PORTORICO</option>
                                                <option value="QA">QATAR</option>
                                                <option value="CD">REP. DEMOCRATICA CO</option>
                                                <option value="CZ">REPUBBLICA CECA</option>
                                                <option value="CG">REPUBBLICA DEL CONG</option>
                                                <option value="GN">REPUBBLICA DI GUINE</option>
                                                <option value="DO">REPUBBLICA DOMINICA</option>
                                                <option value="SK">REPUBBLICA SLOVACCA</option>
                                                <option value="RE">REUNION</option>
                                                <option value="RO">ROMANIA</option>
                                                <option value="RW">RUANDA</option>
                                                <option value="RU">RUSSIA</option>
                                                <option value="VC">SAINT VINCENT E GRE</option>
                                                <option value="PM">SAINT-PIERRE ET MIQ</option>
                                                <option value="SV">SALVADOR</option>
                                                <option value="AS">SAMOA (USA)</option>
                                                <option value="WS">SAMOA OCCIDENTALI</option>
                                                <option value="KN">SAN CRISTOFORO E NE</option>
                                                <option value="SM">SAN MARINO</option>
                                                <option value="LC">SANTA LUCIA</option>
                                                <option value="ST">SAO TOME' E PRINCIPE</option>
                                                <option value="SN">SENEGAL</option>
                                                <option value="YU">SERBIA E MONTENEGRO</option>
                                                <option value="SC">SEYCHELLES</option>
                                                <option value="SL">SIERRA LEONE</option>
                                                <option value="SG">SINGAPORE</option>
                                                <option value="SY">SIRIA</option>
                                                <option value="SI">SLOVENIA</option>
                                                <option value="SO">SOMALIA</option>
                                                <option value="ES">SPAGNA</option>
                                                <option value="LK">SRI LANKA</option>
                                                <option value="US">STATI UNITI D'AMERICA</option>
                                                <option value="ZA">SUD AFRICA</option>
                                                <option value="SD">SUDAN</option>
                                                <option value="SR">SURINAME</option>
                                                <option value="SE">SVEZIA</option>
                                                <option value="CH">SVIZZERA</option>
                                                <option value="SZ">SWAZILAND</option>
                                                <option value="TJ">TAGISKISTAN</option>
                                                <option value="TH">TAILANDIA</option>
                                                <option value="TW">TAIWAN</option>
                                                <option value="TZ">TANZANIA</option>
                                                <option value="TP">TIMOR ORIENTALE</option>
                                                <option value="TG">TOGO</option>
                                                <option value="TO">TONGA</option>
                                                <option value="TT">TRINIDAD E TOBAGO</option>
                                                <option value="TN">TUNISIA</option>
                                                <option value="TR">TURCHIA</option>
                                                <option value="TM">TURKMENISTAN</option>
                                                <option value="TC">TURKS E CAICOS</option>
                                                <option value="TV">TUVALU</option>
                                                <option value="UA">UCRAINA</option>
                                                <option value="UG">UGANDA</option>
                                                <option value="HU">UNGHERIA</option>
                                                <option value="SU">UNIONE SOVIETICA</option>
                                                <option value="UY">URUGUAY</option>
                                                <option value="UZ">UZBEKISTAN</option>
                                                <option value="VU">VANUATU</option>
                                                <option value="VE">VENEZUELA</option>
                                                <option value="VN">VIETNAM</option>
                                                <option value="WF">WALLIS E FUTUNA</option>
                                                <option value="YE">YEMEN</option>
                                                <option value="ZR">ZAIRE</option>
                                                <option value="ZM">ZAMBIA</option>
                                                <option value="ZW">ZIMBABWE</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" style="width: 203px;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0"
                                                        aria-labelledby="select2-indirizzo_nazione1607634034-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-indirizzo_nazione1607634034-container"
                                                            title="ITALIA">ITALIA</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>

                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    var valueindirizzo_nazione1607634034 = "";
                                                    $("select#indirizzo_nazione1607634034").select2()
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group" style="height:52px;"><label>Informazioni indirizzo Extra
                                                : </label><textarea style="height:52px;" name="indirizzo_extra"
                                                                    data-validation="" data-validation-optional="true"
                                                                    placeholder="Questo testo verrà stampato sotto l'indirizzo"
                                                                    class="form-control"></textarea></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 responsabile" style="display: none;">
                                <div class="box box-primary" id="table1_1col83">
                                    <div class="box-header with-border"><h1 class="box-title">Responsabile</h1>
                                        <div class="box-tools pull-right mobile-show">
                                            <button class="btn btn-box-tool collapse" type="button"
                                                    onclick="collapse_mobile('table1_1col83')"><i
                                                    class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="internal-box ">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Nome
                                                    : </label><input style="" id="text_id_resp_nome" type="text"
                                                                     name="resp_nome" value="" placeholder=""
                                                                     data-validation=" required" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Cognome : </label><input
                                                    style="" id="text_id_resp_cognome" type="text" name="resp_cognome"
                                                    value="" placeholder="" data-validation=" required"
                                                    class="form-control"></div>
                                        </div>
                                        <div class="internal-box ">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"
                                                 style="text-transform: uppercase"><label>Codice Fiscale
                                                    : </label><input style="text-transform: uppercase"
                                                                     id="text_id_resp_codice_fiscale" type="text"
                                                                     name="resp_codice_fiscale" value="" placeholder=""
                                                                     data-validation=" required" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Email
                                                    : </label><input style="" id="text_id_resp_email" type="text"
                                                                     name="resp_email" value="" placeholder=""
                                                                     data-validation="email required"
                                                                     class="form-control"></div>
                                        </div>
                                        <div class="internal-box ">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Telefono
                                                    : </label><input style="" id="text_id_resp_telefono" type="text"
                                                                     name="resp_telefono" value="" placeholder=""
                                                                     data-validation="" data-validation-optional="true"
                                                                     class="form-control"></div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Cellulare
                                                    : </label><input style="" id="text_id_resp_cellulare" type="text"
                                                                     name="resp_cellulare" value="" placeholder=""
                                                                     data-validation="" data-validation-optional="true"
                                                                     class="form-control"></div>
                                        </div>
                                        <div class="internal-box ">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Data di nascita
                                                    : </label><span class="Zebra_DatePicker_Icon_Wrapper"
                                                                    style="display: block; position: relative; float: none; inset: auto; margin: 0px; padding: 0px; width: 352px;"><input
                                                        style="position: relative; float: none; inset: auto; margin: 0px; padding-right: 36px;"
                                                        id="date_id_resp_data_nascita1607634034" type="text"
                                                        name="resp_data_nascita" value="" data-validation="date"
                                                        data-validation-format="dd/mm/yyyy"
                                                        data-validation-optional="true" class="form-control"><button
                                                        type="button" class="Zebra_DatePicker_Icon"
                                                        style="top: 9.75px; right: 10px;">Pick a date</button></span>

                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $("#date_id_resp_data_nascita1607634034").Zebra_DatePicker({
                                                            format: "d/m/Y",
                                                            readonly_element: false,
                                                            "days": ["Domenica", "Lunedì", "Marted'", "Mercoledì", "Giovedì", "Venerdì", "Sabato"],
                                                            "months": ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
                                                            "lang_clear_date": "Cancella",
                                                            "show_select_today": "Oggi"
                                                        });
                                                    });
                                                </script>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Nazione di nascita
                                                    : </label><select id="resp_nazione_nascita1607634034" style=""
                                                                      name="resp_nazione_nascita" data-validation=""
                                                                      data-validation-optional="true" tabindex="-1"
                                                                      class="select2-hidden-accessible"
                                                                      aria-hidden="true">
                                                    <option value="AL">ALBANIA</option>
                                                    <option value="DZ">ALGERIA</option>
                                                    <option value="AD">ANDORRA</option>
                                                    <option value="AO">ANGOLA</option>
                                                    <option value="AI">ANGUILLA</option>
                                                    <option value="TF">ANTARTIDE FRANCESE</option>
                                                    <option value="AG">ANTIGUA/BARBUDA</option>
                                                    <option value="AN">ANTILLE OLANDESI</option>
                                                    <option value="SA">ARABIA SAUDITA</option>
                                                    <option value="CK">ARCIPELAGO DI COOK</option>
                                                    <option value="AR">ARGENTINA</option>
                                                    <option value="AM">ARMENIA</option>
                                                    <option value="AW">ARUBA</option>
                                                    <option value="SH">ASCENSION</option>
                                                    <option value="AU">AUSTRALIA</option>
                                                    <option value="AT">AUSTRIA</option>
                                                    <option value="AZ">AZERBAIGIAN</option>
                                                    <option value="BS">BAHAMA</option>
                                                    <option value="BH">BAHREIN</option>
                                                    <option value="BD">BANGLADESH</option>
                                                    <option value="BB">BARBADOS</option>
                                                    <option value="BE">BELGIO</option>
                                                    <option value="BZ">BELIZE</option>
                                                    <option value="BJ">BENIN</option>
                                                    <option value="BM">BERMUDE</option>
                                                    <option value="BT">BHUTAN</option>
                                                    <option value="BY">BIELORUSSIA</option>
                                                    <option value="BO">BOLIVIA</option>
                                                    <option value="BA">BOSNIA-ERZEGOVINA</option>
                                                    <option value="BW">BOTSWANA</option>
                                                    <option value="BR">BRASILE</option>
                                                    <option value="BN">BRUNEI</option>
                                                    <option value="BG">BULGARIA</option>
                                                    <option value="BF">BURKINA FASO</option>
                                                    <option value="BI">BURUNDI</option>
                                                    <option value="KH">CAMBOGIA</option>
                                                    <option value="CM">CAMERUN</option>
                                                    <option value="CA">CANADA</option>
                                                    <option value="KY">CAYMAN</option>
                                                    <option value="CF">CENTRAFRICA</option>
                                                    <option value="TD">CIAD</option>
                                                    <option value="CL">CILE</option>
                                                    <option value="CN">CINA</option>
                                                    <option value="CV">CIPRO</option>
                                                    <option value="CY">CIPRO</option>
                                                    <option value="VA">CITTA' DEL VATICANO</option>
                                                    <option value="CO">COLOMBIA</option>
                                                    <option value="KM">COMORE</option>
                                                    <option value="KP">COREA DEL NORD</option>
                                                    <option value="KR">COREA DEL SUD</option>
                                                    <option value="CI">COSTA D'AVORIO</option>
                                                    <option value="CR">COSTA RICA</option>
                                                    <option value="HR">CROAZIA</option>
                                                    <option value="CU">CUBA</option>
                                                    <option value="DK">DANIMARCA</option>
                                                    <option value="DM">DOMINICA</option>
                                                    <option value="EC">ECUADOR</option>
                                                    <option value="EG">EGITTO</option>
                                                    <option value="AE">EMIRATI ARABI UNITI</option>
                                                    <option value="ER">ERITREA</option>
                                                    <option value="EE">ESTONIA</option>
                                                    <option value="ET">ETIOPIA</option>
                                                    <option value="PH">FILIPPINE</option>
                                                    <option value="FI">FINLANDIA</option>
                                                    <option value="FR">FRANCIA</option>
                                                    <option value="GA">GABON</option>
                                                    <option value="GM">GAMBIA</option>
                                                    <option value="GE">GEORGIA</option>
                                                    <option value="GS">GEORGIA DEL SUD</option>
                                                    <option value="DE">GERMANIA</option>
                                                    <option value="GH">GHANA</option>
                                                    <option value="JM">GIAMAICA</option>
                                                    <option value="JP">GIAPPONE</option>
                                                    <option value="GI">GIBILTERRA</option>
                                                    <option value="DJ">GIBUTI</option>
                                                    <option value="JO">GIORDANIA</option>
                                                    <option value="GB">GRAN BRETAGNA</option>
                                                    <option value="GR">GRECIA</option>
                                                    <option value="GD">GRENADA</option>
                                                    <option value="GL">GROENLANDIA</option>
                                                    <option value="GP">GUADALUPA</option>
                                                    <option value="GU">GUAM</option>
                                                    <option value="GT">GUATEMALA</option>
                                                    <option value="GY">GUIANA</option>
                                                    <option value="GF">GUIANA FRANCESE</option>
                                                    <option value="GQ">GUINEA EQUATORIALE</option>
                                                    <option value="GW">GUINEA-BISSAU</option>
                                                    <option value="HT">HAITI</option>
                                                    <option value="HN">HONDURAS</option>
                                                    <option value="HK">HONG KONG</option>
                                                    <option value="IN">INDIA</option>
                                                    <option value="ID">INDONESIA</option>
                                                    <option value="IR">IRAN</option>
                                                    <option value="IQ">IRAQ</option>
                                                    <option value="IE">IRLANDA</option>
                                                    <option value="IS">ISLANDA</option>
                                                    <option value="NF">ISOLA DI NORFOLK</option>
                                                    <option value="CX">ISOLE CHRISTMAS</option>
                                                    <option value="CC">ISOLE COCOS</option>
                                                    <option value="FO">ISOLE FAEROER</option>
                                                    <option value="FK">ISOLE FALKLAND</option>
                                                    <option value="FJ">ISOLE FIGI</option>
                                                    <option value="MP">ISOLE MARIANNE</option>
                                                    <option value="MH">ISOLE MARSHALL</option>
                                                    <option value="UM">ISOLE MINORI (USA)</option>
                                                    <option value="PW">ISOLE PALAU</option>
                                                    <option value="SB">ISOLE SALOMONE</option>
                                                    <option value="TK">ISOLE TOKELAU</option>
                                                    <option value="VG">ISOLE VERGINI (BRIT</option>
                                                    <option value="VI">ISOLE VERGINI (USA)</option>
                                                    <option value="IL">ISRAELE</option>
                                                    <option value="IT" selected="selected">ITALIA</option>
                                                    <option value="KZ">KAZAKISTAN</option>
                                                    <option value="KE">KENYA</option>
                                                    <option value="KG">KIRGHIZISTAN</option>
                                                    <option value="KI">KIRIBATI</option>
                                                    <option value="XZ">KOSOVO</option>
                                                    <option value="KW">KUWAIT</option>
                                                    <option value="LA">LAOS</option>
                                                    <option value="LS">LESOTHO</option>
                                                    <option value="LV">LETTONIA</option>
                                                    <option value="LB">LIBANO</option>
                                                    <option value="LR">LIBERIA</option>
                                                    <option value="LY">LIBIA</option>
                                                    <option value="LI">LIECHTENSTEIN</option>
                                                    <option value="LT">LITUANIA</option>
                                                    <option value="LU">LUSSEMBURGO</option>
                                                    <option value="MO">MACAO</option>
                                                    <option value="MK">MACEDONIA</option>
                                                    <option value="MG">MADAGASCAR</option>
                                                    <option value="MY">MALAISIA</option>
                                                    <option value="MW">MALAWI</option>
                                                    <option value="MV">MALDIVE</option>
                                                    <option value="ML">MALI</option>
                                                    <option value="MT">MALTA</option>
                                                    <option value="MA">MAROCCO</option>
                                                    <option value="MQ">MARTINICA</option>
                                                    <option value="MR">MAURITANIA</option>
                                                    <option value="MU">MAURIZIO</option>
                                                    <option value="YT">MAYOTTE</option>
                                                    <option value="MX">MESSICO</option>
                                                    <option value="MD">MOLDAVIA</option>
                                                    <option value="MN">MONGOLIA</option>
                                                    <option value="MC">MONTECARLO</option>
                                                    <option value="MS">MONTSERRAT</option>
                                                    <option value="MZ">MOZAMBICO</option>
                                                    <option value="MM">MYANMAR (UNIONE)</option>
                                                    <option value="NA">NAMIBIA</option>
                                                    <option value="NR">NAURU</option>
                                                    <option value="NP">NEPAL</option>
                                                    <option value="NI">NICARAGUA</option>
                                                    <option value="NE">NIGER</option>
                                                    <option value="NG">NIGERIA</option>
                                                    <option value="NO">NORVEGIA</option>
                                                    <option value="NC">NUOVA CALEDONIA</option>
                                                    <option value="NZ">NUOVA ZELANDA</option>
                                                    <option value="NL">OLANDA</option>
                                                    <option value="OM">OMAN</option>
                                                    <option value="PK">PAKISTAN</option>
                                                    <option value="PA">PANAMA</option>
                                                    <option value="PG">PAPUA-NUOVA GUINEA</option>
                                                    <option value="PY">PARAGUAY</option>
                                                    <option value="PE">PERU'</option>
                                                    <option value="PN">PITCAIRN</option>
                                                    <option value="PF">POLINESIA FRANCESE</option>
                                                    <option value="PL">POLONIA</option>
                                                    <option value="PT">PORTOGALLO</option>
                                                    <option value="PR">PORTORICO</option>
                                                    <option value="QA">QATAR</option>
                                                    <option value="CD">REP. DEMOCRATICA CO</option>
                                                    <option value="CZ">REPUBBLICA CECA</option>
                                                    <option value="CG">REPUBBLICA DEL CONG</option>
                                                    <option value="GN">REPUBBLICA DI GUINE</option>
                                                    <option value="DO">REPUBBLICA DOMINICA</option>
                                                    <option value="SK">REPUBBLICA SLOVACCA</option>
                                                    <option value="RE">REUNION</option>
                                                    <option value="RO">ROMANIA</option>
                                                    <option value="RW">RUANDA</option>
                                                    <option value="RU">RUSSIA</option>
                                                    <option value="VC">SAINT VINCENT E GRE</option>
                                                    <option value="PM">SAINT-PIERRE ET MIQ</option>
                                                    <option value="SV">SALVADOR</option>
                                                    <option value="AS">SAMOA (USA)</option>
                                                    <option value="WS">SAMOA OCCIDENTALI</option>
                                                    <option value="KN">SAN CRISTOFORO E NE</option>
                                                    <option value="SM">SAN MARINO</option>
                                                    <option value="LC">SANTA LUCIA</option>
                                                    <option value="ST">SAO TOME' E PRINCIPE</option>
                                                    <option value="SN">SENEGAL</option>
                                                    <option value="YU">SERBIA E MONTENEGRO</option>
                                                    <option value="SC">SEYCHELLES</option>
                                                    <option value="SL">SIERRA LEONE</option>
                                                    <option value="SG">SINGAPORE</option>
                                                    <option value="SY">SIRIA</option>
                                                    <option value="SI">SLOVENIA</option>
                                                    <option value="SO">SOMALIA</option>
                                                    <option value="ES">SPAGNA</option>
                                                    <option value="LK">SRI LANKA</option>
                                                    <option value="US">STATI UNITI D'AMERICA</option>
                                                    <option value="ZA">SUD AFRICA</option>
                                                    <option value="SD">SUDAN</option>
                                                    <option value="SR">SURINAME</option>
                                                    <option value="SE">SVEZIA</option>
                                                    <option value="CH">SVIZZERA</option>
                                                    <option value="SZ">SWAZILAND</option>
                                                    <option value="TJ">TAGISKISTAN</option>
                                                    <option value="TH">TAILANDIA</option>
                                                    <option value="TW">TAIWAN</option>
                                                    <option value="TZ">TANZANIA</option>
                                                    <option value="TP">TIMOR ORIENTALE</option>
                                                    <option value="TG">TOGO</option>
                                                    <option value="TO">TONGA</option>
                                                    <option value="TT">TRINIDAD E TOBAGO</option>
                                                    <option value="TN">TUNISIA</option>
                                                    <option value="TR">TURCHIA</option>
                                                    <option value="TM">TURKMENISTAN</option>
                                                    <option value="TC">TURKS E CAICOS</option>
                                                    <option value="TV">TUVALU</option>
                                                    <option value="UA">UCRAINA</option>
                                                    <option value="UG">UGANDA</option>
                                                    <option value="HU">UNGHERIA</option>
                                                    <option value="SU">UNIONE SOVIETICA</option>
                                                    <option value="UY">URUGUAY</option>
                                                    <option value="UZ">UZBEKISTAN</option>
                                                    <option value="VU">VANUATU</option>
                                                    <option value="VE">VENEZUELA</option>
                                                    <option value="VN">VIETNAM</option>
                                                    <option value="WF">WALLIS E FUTUNA</option>
                                                    <option value="YE">YEMEN</option>
                                                    <option value="ZR">ZAIRE</option>
                                                    <option value="ZM">ZAMBIA</option>
                                                    <option value="ZW">ZIMBABWE</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 203px;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0"
                                                            aria-labelledby="select2-resp_nazione_nascita1607634034-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-resp_nazione_nascita1607634034-container"
                                                                title="ITALIA">ITALIA</span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        var valueresp_nazione_nascita1607634034 = "";
                                                        $("select#resp_nazione_nascita1607634034").select2()
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="internal-box ">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6"><label>Città di nascita
                                                    : </label><input style="" id="text_id_resp_citta_nascita"
                                                                     type="text" name="resp_citta_nascita" value=""
                                                                     placeholder="" data-validation=""
                                                                     data-validation-optional="true"
                                                                     class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="box box-primary" id="table1_1col114">
                                    <div class="box-header with-border"><h1 class="box-title">Dati Aggiuntivi</h1>
                                        <div class="box-tools pull-right mobile-show">
                                            <button class="btn btn-box-tool collapse" type="button"
                                                    onclick="collapse_mobile('table1_1col114')"><i
                                                    class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="internal-box ">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12"><label>Numero codice
                                                    sconto: : </label><textarea style="" name="campo3"
                                                                                data-validation=""
                                                                                data-validation-optional="true"
                                                                                placeholder=""
                                                                                class="form-control"></textarea></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="box box-primary" id="table1_1col445">
                                    <div class="box-header with-border"><h1 class="box-title">Privacy</h1>
                                        <div class="box-tools pull-right mobile-show">
                                            <button class="btn btn-box-tool collapse" type="button"
                                                    onclick="collapse_mobile('table1_1col445')"><i
                                                    class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">

                                        <div class="form-group checkbox">


                                            <input style="display:block;" type="checkbox" name="accept[0]" id="accept0"
                                                   data-validation="required" class="checkbox_item error" value="1"
                                                   data-validation-error-msg="Devi accettare <b>privacy </b> per poterti registrare"
                                                   data-validation-has-keyup-event="true"
                                                   data-validation-current-error="Devi accettare l'informativa sulla privacy per poterti registrare">


                                            <label for="accept0"><span><a
                                                        onclick="$('#privacy_0').modal();">privacy </a></span></label><br>


                                        </div>


                                        <div id="privacy_0" style="display:none; width:80%;"><p
                                                style="&quot;text-align:center&quot;"><strong>INFORMATIVA EX ART. 13
                                                    GDPR PER SOCI E ASPIRANTI SOCI<br>
                                                    E CONSENSO AL TRATTAMENTO</strong></p>

                                            <p>Caro socio/a o aspirante socio/a,<br>
                                                ai sensi degli art. 13 e 14 del Regolamento UE 2016/679 in materia di
                                                protezione dei dati personali (“GDPR”) ti informiamo di quanto
                                                segue.<br>
                                                <strong>Finalità del trattamento e base giuridica</strong>.
                                                L’Associazione tratta i tuoi dati personali esclusivamente per lo
                                                svolgimento dell’attività istituzionale ed in particolare:</p>

                                            <ol style="&quot;list-style-type:lower-alpha&quot;">
                                                <li>per la gestione del rapporto associativo (invio della
                                                    corrispondenza, convocazione alle sedute degli organi, procedure
                                                    amministrative interne) e per l’organizzazione ed esecuzione del
                                                    servizio
                                                </li>
                                                <li>per adempiere agli obblighi di legge (es. fiscali, assicurativi,
                                                    ecc.) riferiti ai soci dell’Associazione;
                                                </li>
                                                <li>per l’invio (tramite posta, posta elettronica, newsletter o numero
                                                    di cellulare o altri mezzi informatici) di comunicazioni legate
                                                    all’attività e iniziative dell’Associazione
                                                </li>
                                                <li><em>in relazione alle immagini/video, per la pubblicazione nel sito
                                                        dell’Associazione, sui social network dell’Associazione o su
                                                        newsletter o su materiale cartaceo di promozione delle attività
                                                        istituzionali dell’Associazione previo Tuo esplicito
                                                        consenso</em></li>
                                                <li><em>in relazione alla foto personale, per l’inserimento nel
                                                        tesserino di riconoscimento</em></li>
                                                <li>per la partecipazione dei soci a corsi, incontri e iniziative e per
                                                    l’organizzazione e gestione dei corsi&nbsp;
                                                </li>
                                                <li>per analisi statistiche, anche in forma aggregata.</li>
                                            </ol>

                                            <p>La base giuridica del trattamento è rappresentata dalla richiesta di
                                                adesione e dal contratto associativo (art. 6 comma 1 lett. b GDPR), dal
                                                consenso al trattamento (art. 6 comma 1 lett. a – art. 9 comma 2 lett. a
                                                GDPR), dai contatti regolari con l’Associazione (art. 9 comma 2 lett. d
                                                GDPR), dagli obblighi legali a cui è tenuta l’Associazione (art. 6 comma
                                                1 lett. c GDPR)</p>

                                            <p><strong>Modalità e principi del trattamento</strong>. Il trattamento
                                                avverrà nel rispetto del GDPR e del D.Lgs. n. 196/03 (“Codice in materia
                                                di protezione dei dati personali”), nonché dei principi di liceità,
                                                correttezza e trasparenza, adeguatezza e pertinenza, con modalità
                                                cartacee ed informatiche, ad opera di persone autorizzate
                                                dall’Associazione e con l’adozione di misure adeguate di protezione, in
                                                modo da garantire la sicurezza e la riservatezza dei dati. <em>Non verrà
                                                    svolto alcun processo decisionale automatizzato.</em></p>

                                            <p><strong>Necessità del conferimento. </strong>Il conferimento dei dati
                                                anagrafici e di contatto è necessario in quanto strettamente legato alla
                                                gestione del rapporto associativo. <em>Il consenso all’utilizzo delle
                                                    immagini/video e alla diffusione dei dati nel sito istituzionale e
                                                    nelle altre modalità sopra descritte è facoltativo</em><em>.</em>
                                            </p>

                                            <p><strong>Comunicazione dei dati e trasferimento all’estero dei
                                                    dati.</strong> <em>I dati potranno essere comunicati agli altri soci
                                                    ai fini ai fini dell’organizzazione ed esecuzione del servizio.</em>
                                                I dati potranno essere comunicati ai soggetti deputati allo svolgimento
                                                di attività a cui l’Associazione è tenuta in base ad obbligo di legge
                                                (commercialista, assicuratore, sistemista, ecc.) e a tutte quelle
                                                persone fisiche e/o giuridiche, pubbliche e/o private quando la
                                                comunicazione risulti necessaria o funzionale allo svolgimento
                                                dell’attività istituzionale (formatori, Enti Locali, ditte che curano la
                                                manutenzione informatica, società organizzatrici dei corsi, ecc.). I
                                                dati potranno essere trasferiti a destinatari con sede extra UE che
                                                hanno sottoscritto accordi diretti ad assicurare un livello di
                                                protezione adeguato dei dati personali, o comunque previa verifica che
                                                il destinatario garantisca adeguate misure di protezione. Ove necessario
                                                o opportuno, i soggetti cui vengono trasmessi i dati per lo svolgimento
                                                di attività per conto dell’Associazione saranno nominati Responsabili
                                                (esterni) del trattamento ai sensi dell’art. 28 GDPR.</p>

                                            <p><strong>Periodo di conservazione dei dati</strong>. I dati saranno
                                                utilizzati dall’Associazione fino alla cessazione del rapporto
                                                associativo. Dopo tale data, saranno conservati per finalità di
                                                archivio, obblighi legali o contabili o fiscali o per esigenze di tutela
                                                dell’Associazione, con esclusione di comunicazioni a terzi e diffusione
                                                in ogni caso applicando i principi di proporzionalità e minimizzazione.
                                            </p>

                                            <p><strong>Diritti dell’interessato</strong>. Nella qualità di interessato,
                                                Ti sono garantiti tutti i diritti specificati all’art. 15 - 20 GDPR, tra
                                                cui il diritto all’accesso, rettifica e cancellazione dei dati, il
                                                diritto di limitazione e opposizione al trattamento, il diritto di
                                                revocare il consenso al trattamento (senza pregiudizio per la liceità
                                                del trattamento basata sul consenso acquisito prima della revoca),
                                                nonché il di proporre reclamo al Garante per la Protezione dei dati
                                                personali qualora tu ritenga che il trattamento che ti riguarda violi il
                                                GDPR o la normativa italiana. I suddetti diritti possono essere
                                                esercitati mediante comunicazione scritta da inviare a mezzo <em>posta
                                                    elettronica, p.e.c. o fax</em>, o a mezzo Raccomandata presso la
                                                sede dell’Associazione.</p>

                                            <p><strong>Titolare del trattamento</strong>. Il titolare del trattamento è
                                                l’Associazione Associazione Fablab Torino, con sede in via egeo 16
                                                (10134) Torino TO C.F 97754320014.</p>

                                            <p>&nbsp;</p>

                                            <p style="&quot;text-align:center&quot;"><strong>CONSENSO AL TRATTAMENTO DEI
                                                    DATI PERSONALI</strong></p>

                                            <p>Io sottoscritto/a, _________________________________&nbsp;, nella qualità
                                                di interessato, letta la suddetta informativa resa ai sensi dell’art. 13
                                                GDPR, <strong>autorizzo/do il consenso </strong></p>

                                            <p>&nbsp; &nbsp; &nbsp; [&nbsp; ] al trattamento dei miei dati personali, da
                                                svolgersi in conformità a quanto indicato nella suddetta informativa e
                                                nel rispetto delle disposizioni del GDPR e del D.Lgs. n. 196/03 <strong>(*)</strong>
                                            </p>

                                            <p>&nbsp; &nbsp; &nbsp; [&nbsp; ]<em> </em>alla diffusione del mio nome e
                                                cognome, della mia immagine o di video che mi riprendono nel sito
                                                istituzionale, nei social network (es. pagina
                                                Facebook/Instagram/Youtube) e sul materiale informativo cartaceo
                                                dell’Associazione, per soli fini di descrizione e promozione
                                                dell’attività istituzionale, nel rispetto delle disposizioni del GDPR e
                                                del D.Lgs. n. 196/03 e delle autorizzazioni/indicazioni della
                                                Commissione UE e del Garante per la Protezione dei Dati Personali
                                                <strong>(**)</strong></p>

                                            <p style="&quot;margin-left:9.0pt&quot;">________________, lì
                                                __________________&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; L’INTERESSATO&nbsp;
                                                &nbsp;&nbsp; &nbsp;</p>

                                            <p style="&quot;margin-left:9.0pt&quot;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; __________________&nbsp; &nbsp; &nbsp;</p>

                                            <p style="&quot;margin-left:292.2pt;" text-align:right&quot;="">&nbsp;</p>

                                            <p><strong>(*)</strong> Il consenso al trattamento è indispensabile ai fini
                                                del perseguimento delle finalità associative e quindi la mancata
                                                autorizzazione comporta l’impossibilità di perfezionare l’adesione o il
                                                mantenimento della qualifica di socio<br>
                                                <strong>(**)</strong> Il consenso al trattamento è facoltativo</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box box-primary" id="table1_1col226">
                                    <div class="box-body"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="action" value="aggiungi"><input type="hidden" name="tipo_form" value="0"><input
                        type="hidden" name="registra_responsabile" value="0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="box-button pull-right">
                                    <div class="button_form">
                                        <button type="submit" id="btn_invia_registrazione"
                                                class="btn btn-primary submit">Invia registrazione
                                        </button>
                                        <button type="button" onclick="reload_location();"
                                                id="btn_invia_registrazione_new" class="btn btn-warning submit"
                                                style="display:none;">Nuova Registrazione
                                        </button>
                                        <button class="loading btn btn-primary" style="display:none;" type="button"><i
                                                class="fa fa-spinner fa-pulse" aria-hidden="true"></i>&nbsp;Attendere
                                        </button>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>


        </div>
        <!-- end container -->
    </div>

@endsection
