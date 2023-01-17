<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/8020a10438.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Custom Styles -->
    @livewireStyles
    @yield('styles')

    <!-- Custom Scripts -->
    @yield('js-head')

    <style>
        input[type="text"] {
            background-color: white !important
        }

        textarea {
            background-color: white !important;
        }
    </style>
</head>

<body>
    <div id="app">
        @include('layouts.header')

        <main class="py-2">
            @yield('content')
        </main>
    </div>

    <!-- Custom Scripts -->
    @livewireScripts
    @yield('js-body')
</body>

</html>
