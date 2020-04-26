@extends('layouts.app')

@section('navbar')
@stop

@section('header')
@stop

@section('content')
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
                <a href="{{ route('logout') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" x-method="POST">{{ __('Logout') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <ul class="list-reset">
                    <li class="inline pr-8">
                        <a href="https://laravel.com/docs" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Documentation">Documentation</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://laracasts.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Laracasts">Laracasts</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://laravel-news.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="News">News</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://nova.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Nova">Nova</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://forge.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Forge">Forge</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://vapor.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Vapor">Vapor</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://github.com/laravel/laravel" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="GitHub">GitHub</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://tailwindcss.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Tailwind Css">Tailwind CSS</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
