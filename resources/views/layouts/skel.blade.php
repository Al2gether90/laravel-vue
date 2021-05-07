<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pottorff') }}</title>

    @livewireStyles


    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @yield('skel_styles')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="off">
    @yield('skel_content')
@livewireScripts
    <!-- Scripts -->
    @yield('skel_scripts')
</body>
</html>
