<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- YOUR CUSTOM CSS (IMPORTANT) -->
    <link rel="stylesheet" href="{{ asset('assets/css/list.css') }}">
</head>

<body>

    @include('layouts.header')
    @include('layouts.sidebar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

</body>

</html>
