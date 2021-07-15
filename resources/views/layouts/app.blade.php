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
    <link rel="stylesheet" href="{{ asset('/library/splide/css/splide.min.css')}}">
    <link rel="stylesheet" href="{{mix('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/library/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('library/tiny-slider/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('packages/noty/noty.css')}}">
    <link rel="stylesheet" href="{{asset('/css/noty_theme.css')}}">
    @yield('extra-css')
</head>
<body>
{{-- <style>
    .snowflake { color: #fff; font-size: 1em; font-family: Arial; text-shadow: 0 0 1px #000; }
    @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%{-webkit-transform:translateX(0px);transform:translateX(0px)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}100%{-webkit-transform:translateX(0px);transform:translateX(0px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%{transform:translateX(0px)}50%{transform:translateX(80px)}100%{transform:translateX(0px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}
</style> --}}
@include('layouts.partial.header')
{{-- <div class="snowflakes" aria-hidden="true"> @for($i=0;$i<10;$i++) <div class="snowflake"> ❅ </div> @endfor </div> --}}
@yield('content')

@include('layouts.partial.footer')
<script src="{{mix("app.js")}}"></script>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('library/tiny-slider/tiny-slider.js')}}"></script>
{{-- Bootstrap Notifications using Prologue Alerts & PNotify JS --}}
<script src="{{ asset('packages/noty/noty.js') }}"></script>

@if(Session::has('alerte'))

    <script type="text/javascript">
        Noty.overrideDefaults({
            layout: 'topRight',
            theme: 'backstrap',
            timeout: 2500,
            closeWith: ['click', 'button'],
        });

        new Noty({
            type: "{{ Session::get('type') }}",
            text: "{!! str_replace('"', "'", Session::get('alerte')) !!}"
        }).show();

    </script>

@endif

@yield('extra-js')
</body>
</html>
