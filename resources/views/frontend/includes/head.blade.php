    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================== BEGIN FAVICON ================== -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <!-- ================== END FAVICON ================== -->

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!--link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" /-->
    <link href="{{mix('/css/bundle.css')}}" rel="stylesheet" />
    <link href="{{mix('/css/frontend.css')}}" rel="stylesheet" />
    <link href="{{mix('/css/animate.css')}}" rel="stylesheet" />

    @stack('css')
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN HEAD JS ================== -->
    <script src="/plugins/pace/js/pace.min.js"></script>

    @stack('head_scripts')
    <!-- ================== END HEAD JS ================== -->


