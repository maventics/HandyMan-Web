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

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-datetimepicker.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables/datatables.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
</head>

<body>

    <div class="main-wrapper">
        @include('admin.layouts.includes.header')

        @include('admin.layouts.includes.sidebar')

        @yield('content')

    </div>

<script src="{{asset('assets/admin/js/jquery-3.7.1.min.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>

<script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>

<script src="{{asset('assets/admin/js/feather.min.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>

<script src="{{asset('assets/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>

<script src="{{asset('assets/admin/plugins/select2/js/select2.min.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>

<script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>
<script src="{{asset('assets/admin/plugins/datatables/datatables.min.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts" type="95f7ed501aadc4e838ee9242-text/javascript"></script>

<script src="{{asset('assets/admin/js/script.js')}}" type="95f7ed501aadc4e838ee9242-text/javascript"></script>
<script src="{{asset('assets/admin/js/rocket-loader.min.js')}}" data-cf-settings="95f7ed501aadc4e838ee9242-|49" defer></script>
    @include('sweetalert::alert')


    @stack('scripts')
</body>
</html>
