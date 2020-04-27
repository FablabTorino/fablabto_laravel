<div class="separator" id="machines" ></div>
<div id="machines" class="content bg-silver-lighter" data-scrollview="true">
        <!-- begin container -->
        <div class="container" data-animation="true" data-animation-type="fadeInDown">
            <h2 class="content-title">I nostri macchinari</h2>

            <!-- begin row -->
            <div class="row machine_row content-desc">
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="machine">
                        <div class="image" data-animation="true" data-animation-type="flipInX">
                            <a href="#modal-3dprint" data-toggle="modal"><img src="images/machines/3dprint.svg" alt="3D Printer" /></a>
                        </div>
                        <div class="info">
                            <h4 class="title">Stampanti 3D</h4>
                            <p class="desc">La stampa 3D &egrave; una tecnologia di fabbricazione digitale con cui si
                                possono realizzare oggetti fisici partendo da un modello 3D digitale che pu&ograve; essere
                                realizzato grazie a software di modellazione 3D.</p>
                        </div>
                    </div>

                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="machine">
                        <div class="image" data-animation="true" data-animation-type="flipInX">
                            <a href="#modal-laser" data-toggle="modal"><img src="images/machines/laser.svg" alt="Laser Cutter" /></a>
                        </div>
                        <div class="info">
                            <h4 class="title">Taglio Laser</h4>
                            <p class="desc">La tecnologia laser &egrave; un processo frequentemente utilizzato per il taglio
                                di un'ampia variet&agrave; di materiali. I grandi vantaggi di utilizzare una macchina da
                                taglio laser sono l'elevata precisione, la velocit&agrave; e la versatilit&agrave; del laser.</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="machine">
                        <div class="image" data-animation="true" data-animation-type="flipInX">
                           <a href="#modal-cnc" data-toggle="modal"><img src="images/machines/cnc.svg" alt="CNC Mill" /></a>
                        </div>
                        <div class="info">
                            <h4 class="title">Frese CNC</h4>
                            <p class="desc">La fresa CNC &egrave; una macchina utensile i cui movimenti vengono controllati
                                da un dispositivo elettronico, e permettono di effettuare lavorazioni su diversi materiali,
                                utilizzando una tecnica di fabbricazione digitale sottrattiva.</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->

            <!-- begin row -->
            <div class="row machine_row content-desc">
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="machine">
                        <div class="image" data-animation="true" data-animation-type="flipInX">
                            <a href="vinyl"><img src="images/machines/vinyl.svg" alt="Vinyl Cutter" /></a>
                        </div>
                        <div class="info">
                            <h4 class="title">Vinyl Cutter</h4>
                            <p class="desc">La vinyl cutter &egrave; un macchinario a controllo numerico utilizzato per
                                la realizzazione di adesivi e grafiche su fogli di vinile, partendo da un disegno
                                vettoriale.</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4 col-sm-4" >
                    <div class="machine">
                        <div class="image" data-animation="true" data-animation-type="flipInX">
                            <a href="#modal-dialog" data-toggle="modal"><img src="images/machines/tools.svg" alt="Tools" /></a>
                        </div>
                        <div class="info">
                            <h4 class="title">Tools</h4>
                            <p class="desc">Trapani a colonna, smerigliatrici, levigatrici, cacciaviti, e tanti altri
                                attrezzi utili per la realizzazione delle vostre idee!</p>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->

            </div>
            <!-- end row -->

            <p class="center-desc">
                Inoltre trovi un bancone di <span class="text-highlight">elettronica, attrezzi di falegnameria</span> e un frigo sempre pieno di birrette fresche!
            </p>

            <!-- POPUP WITH SPECIFIC MACHINES -->
            @include('frontend.pages.machines.3dprint')
            @include('frontend.pages.machines.laser')
            @include('frontend.pages.machines.cnc')
            <!-- END POPUP WITH SPECIFIC MACHINES -->

        </div>
        <!-- end container -->
    </div>

@push('scripts')
    <script>

    </script>
@endpush
