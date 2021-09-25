<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> <!-- bootstrap 5 -->

@yield('styles') <!-- STYLES is something like an ID for the tag YIELD -->
</head>

<body>
@component('master.header')
@endcomponent

<main>
    @yield('content') <!-- YIELD IS A SUPER IMPORTANT TAG THAT ALLOWS ME TO ESTABLISH MANUALLY THE CONTENT OF A PAGE-->
</main>

@component('master.footer')
@endcomponent

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@yield('scripts') <!-- SCRIPTS are something like an ID for the tag YIELD -->
</body>
</html>
