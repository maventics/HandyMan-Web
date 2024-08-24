<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('assets/admin/img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/feather.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
</head>

<body>

    @yield('content')

<script src="{{asset('assets/admin/js/jquery-3.7.1.min.js')}}" type="f0bbb727a5dda854a14c51b9-text/javascript"></script>
<script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}" type="f0bbb727a5dda854a14c51b9-text/javascript"></script>
<script src="{{asset('assets/admin/js/feather.min.js')}}" type="f0bbb727a5dda854a14c51b9-text/javascript"></script>
<script src="{{asset('assets/admin/js/script.js')}}" type="f0bbb727a5dda854a14c51b9-text/javascript"></script>
<script src="{{asset('assets/admin/js/rocket-loader.min.js')}}" data-cf-settings="f0bbb727a5dda854a14c51b9-|49" defer></script>

    @include('sweetalert::alert')
</body>
</html>
