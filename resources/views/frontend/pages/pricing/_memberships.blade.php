
        <!-- begin pricing-table -->
        @php
        $month = date('m');
        $price_percentage = 0;
        if      ($month >= 9) $price_percentage = 40;
        elseif  ($month >= 5) $price_percentage = 20;


        // Override to remove discount percentage
        // $price_percentage = 0;

        $ribbon = '<div class="ribbon"><span>- ' . $price_percentage .'% !</span></div>';
        if($price_percentage == 0) $ribbon = "";
        @endphp

        <ul class="pricing-table pricing-col-4">
            <!-- Tessera Studenti -->
            <li data-animation="true" data-animation-type="fadeInUp">
                <div class="card-wrapper">
                    <div class="pricing-container ">
                        {!! $ribbon !!}
                        <h3>Tessera Studenti</h3>
                        <div class="price">
                            <div class="price-figure">
                                <span class="price-number">
                                    @php echo 50 - (50 * $price_percentage / 100) @endphp
                                    &euro;
                                </span>
                            </div>
                        </div>
                        <ul class="features">
                            <li>Accesso Laboratorio dalle ore 16:00 alle 20:00</li>
                            <li>Copertura Assicurativa</li>
                            <li>Frequentare gratuitamente Workshop Hello World</li>
                            <li>Utilizzo macchine a consumo</li>
                            <li>Frequentare tutte le attività del FablabTO</li>
                        </ul>
                        <div class="footer">
                            <a href="pay" class="btn btn-inverse btn-block">Io! Sono uno studente! OK!</a>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Tessera Base -->
            <li data-animation="true" data-animation-type="fadeInUp">
                <div class="card-wrapper">
                    {!! $ribbon !!}
                    <div class="pricing-container">
                        <h3>Tessera Base</h3>
                        <div class="price">
                            <div class="price-figure">
                                <span class="price-number">
                                    @php echo 100 - (100 * $price_percentage / 100) @endphp
                                    &euro;
                                </span>
                            </div>
                        </div>
                        <ul class="features">
                            <li>Accesso Laboratorio dalle ore 16:00 alle 20:00</li>
                            <li>Copertura Assicurativa</li>
                            <li>Frequentare gratuitamente Workshop Hello World</li>
                            <li>Utilizzo macchine a consumo</li>
                            <li>Frequentare tutte le attività del FablabTO</li>
                        </ul>
                        <div class="footer">
                            <a href="pay" class="btn btn-inverse btn-block">E vada per una Base! Mi iscrivo!</a>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Tessera Pro -->
            <li class="highlight" data-animation="true" data-animation-type="fadeInUp">
                <div class="card-wrapper">
                    {!! $ribbon !!}
                    <div class="pricing-container">
                        <h3>Tessera Maker</h3>
                        <div class="price">
                            <div class="price-figure">
                                <span class="price-number">
                                    @php echo 500 - (500 * $price_percentage / 100) @endphp
                                    &euro;
                                </span>
                            </div>
                        </div>
                        <ul class="features">
                            <li>Tutto quello elencato in "Tessera Base"</li>
                            <li>Accesso Laboratorio 24/7</li>
                            <li>Stoccaggio Materiali produttivi</li>
                            <li>Utilizzo macchinari in orari extra-fablab</li>
                            <li>Pensata per piccole partite IVA che hanno necessità di produzioni continue</li>
                        </ul>
                        <div class="footer">
                            <a href="pay" class="btn btn-theme btn-block">Go PRO GO!</a>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Tessera Convenzione -->
            <li data-animation="true" data-animation-type="fadeInUp">
                <div class="card-wrapper">
                    <div class="pricing-container">
                        <h3>Tessera Convenzionata</h3>
                        <div class="price">
                            <div class="price-figure">
                                <span class="price-number" style="font-size: medium;">
                                    <p>
                                    PoliTO: 30 &euro;<br/>
                                    IED: 40 &euro;<br/>
                                    </p>
                                </span>
                            </div>
                        </div>
                        <ul class="features">
                            <li>Accesso Laboratorio dalle ore 16:00 alle 00:00</li>
                            <li>Copertura Assicurativa</li>
                            <li>Frequentare gratuitamente Workshop Hello World</li>
                            <li>Utilizzo macchine a consumo</li>
                            <li>Frequentare tutte le attività del FablabTO</li>
                        </ul>
                        <div class="footer">
                            <a href="affiliated" class="btn btn-inverse btn-block">Ce l'ho! Evvai!</a>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <!-- end pricing-table -->

