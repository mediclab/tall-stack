<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <livewire:styles>
</head>
<body>
<div id="app">
    @section('navbar')
        @include('layouts.include.navbar')
    @show
    @section('header')
        @include('layouts.include.header')
    @show
    
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
<livewire:scripts>
</body>
