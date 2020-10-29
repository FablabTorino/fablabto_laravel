@push('css')
    <link href="{{mix('/css/slitslider/slitslider.css')}}" rel="stylesheet" />
@endpush


@push('head_scripts')
    <script type="text/javascript" src="/plugins/slitslider/modernizr.custom.79639.js"></script>
@endpush

<div class="modal hide fade" id="modal-covid">
    <div class="modal-dialog fullpage">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            <div class="modal-body">
                @include('frontend.pages._covid')
            </div>
        </div>
    </div>
</div>



<div id="home" class="content has-bg">  <!-- class="home" -->

    <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-1"></div>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-2"></div>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-3"></div>
                </div>
            </div>

            <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-4"></div>
                </div>
            </div>

            <div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-5"></div>
                </div>
            </div>

        </div><!-- /sl-slider -->
    </div><!-- /slider-wrapper -->

    <!-- begin content-bg (used for semitransparent black overlay /of video-->
    <div class="content-bg"
         data-paroller="true"
         data-paroller-factor="0.5"
         data-paroller-factor-xs="0.25">

        <!--video autoplay muted loop id="myVideo">
            <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
        </video-->

    </div>
    <!-- end content-bg -->


    <!-- begin container -->
    <div class="container home-content" data-animation="true" data-animation-type="fadeInUp">
        <!-- begin carousel -->
        <div class="carousel testimonials slide" data-ride="carousel" id="testimonials">
            <!-- begin carousel-inner -->
            <div class="carousel-inner text-center">
                <!-- begin item -->
                <div class="carousel-item active">
                    <h1 class="content-title">Benvenuto al Fablab Torino!</h1>
                    <h3>Fablab Torino &egrave; il primo <span
                            class="text-theme">laboratorio di fabbricazione digitale</span>
                        aperto in Italia</h3>
                    <a href="association" class="btn btn-theme">DIMMI DI PI&Ugrave;</a>

                </div>
                <!-- end item -->
                <!-- begin item -->
                <div class="carousel-item">
                    <h1 class="content-title">Vuoi essere dei nostri?</h1>
                    <h3>Scopri le nostre tessere e scegli quella che fa per te</h3>
                    <a href="pricing" class="btn btn-theme">ISCRIVITI</a>
                </div>
                <!-- end item -->
                <!-- begin item -->
                <div class="carousel-item">
                    <h1 class="content-title">Workshop, eventi, incontri!</h1>
                    <h3>Al Fablab Torino facciamo un sacco di cose. Non perdertene nemmeno una</h3>
                    <form class="contact-form"
                          action="https://fablabtorino.us5.list-manage.com/subscribe/post"
                          method="POST">
                        <input name="u" value="bbd5781f8c72a1885774d98c0" type="hidden">
                        <input name="orig-lang" value="1" type="hidden">
                        <input name="id" value="2ee26e2206" type="hidden">
                        <input type="submit" value="ISCRIVITI ALLA NEWSLETTER" name="submit" class="btn btn-theme">
                    </form>
                </div>
                <!-- end item -->
            </div>
            <!-- end carousel-inner -->
            <!-- begin carousel-indicators -->
            <ol class="carousel-indicators m-b-0">
                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials" data-slide-to="1" class=""></li>
                <li data-target="#testimonials" data-slide-to="2" class=""></li>
            </ol>
            <!-- end carousel-indicators -->
        </div>
        <!-- end carousel -->
    </div>
    <!-- end container -->
</div>

@push('end_scripts')
    <script src="/plugins/slitslider/jquery.slitslider.js"></script>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            var ss = $('#slider').slitslider();
            ss.options.interval = 5000;
            ss.options.speed = 2000;
            ss.resize();

        });
    </script>

    <script type="text/javascript" >
        $(window).on('load',function(){
            $('#modal-covid').modal('show');
        });
    </script>
@endpush
