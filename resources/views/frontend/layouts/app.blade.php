<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('assets/frontend/img/favicon.png')}}" type="image/x-icon')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/plugins/feather/feather.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/plugins/aos/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
</head>

<body class="home-page bg-one">

    <div id="global-loader">
        <div class="whirly-loader"> </div>
        <div class="loader-img">
            <img src="{{asset('assets/frontend/img/load-icon.svg')}}" class="img-fluid" alt="Img">
        </div>
    </div>


    <div class="main-wrapper">

      @include('frontend.layouts.includes.header')

        @yield('content')

      @include('frontend.layouts.includes.footer')

    </div>

    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"><img src="{{asset('assets/frontend/img/icon/top-icon.svg')}}" class="img-fluid"
                alt="Img"></span>
    </button>

    <script src="{{asset('assets/frontend/js/jquery-3.7.1.min.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>

    <script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>

    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>

    <script src="{{asset('assets/frontend/js/jquery.waypoints.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>
    <script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>

    <script src="{{asset('assets/frontend/plugins/aos/aos.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>

    <script src="{{asset('assets/frontend/plugins/select2/js/select2.min.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>

    <script src="{{asset('assets/frontend/js/slick.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>

    <script src="{{asset('assets/frontend/js/script.js')}}" type="0aafba7c21961c0a3249d1d6-text/javascript"></script>
    <script src="{{asset('assets/frontend/js/rocket-loader.min.js')}}" data-cf-settings="0aafba7c21961c0a3249d1d6-|49" defer></script>
</body>

</html>
