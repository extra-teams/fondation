<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fondation 225 Team"/>
    <meta name="description" content="Fondation 225 | "/>
    <meta name="keywords" content="fondation225,civ,event,padev"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon2.jpeg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon2-32x32.jpeg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon2-32x32.jpeg')}}">
    <link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/library/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('library/tiny-slider/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    @yield('extra-css')
</head>
<body>

@include('layouts.partial.header')
@yield('content')

@include('layouts.partial.footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('library/tiny-slider/tiny-slider.js')}}"></script>
@yield('extra-js')

</body>
</html>
