<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ config('app.env') === 'production' ? mix('css/app.css') : mix('css/dev/app.css') }}" rel="stylesheet">
    
    @livewireStyles
</head>
<body class="container h-screen mx-auto">
    @include('layouts.menu')
    <div>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ config('app.env') === 'production' ? mix('css/app.css') : mix('css/dev/app.css') }}"></script>
    <script src="https://kit.fontawesome.com/38243d5f71.js"></script>
    @livewireScripts
</body>
</html>
