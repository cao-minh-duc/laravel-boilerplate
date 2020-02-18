<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    @livewireStyles
</head>
<body class="container h-screen mx-auto">
    @livewire(\CaoMinhDuc\StorefrontUi\Layouts\Menu::class)
    <div>
        @yield('content')
    </div>
    @livewire(\CaoMinhDuc\StorefrontUi\Layouts\Footer::class)
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/38243d5f71.js"></script>
    @livewireScripts
</body>
</html>
