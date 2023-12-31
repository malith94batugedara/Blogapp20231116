<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        @include('layouts.inc.frontend-navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>
