<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/comerc.css') }}" rel="stylesheet">
</head>

<body class="login-content">
@yield('content')
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}" defer></script>
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('vendors/bower_components/Waves/dist/waves.min.js') }}" defer></script>
<script src="{{ asset('js/functions.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
