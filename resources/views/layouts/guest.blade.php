<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="">
    <!--
    <nav class="navbar navbar-expand-lg bg-primary">

        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <x-application-logo class="" />
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarNav>
            <ul class=" navbar-nav">
            @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                </li>
@else
    <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                </li>

                @if (Route::has('register'))
    <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
    @endif
            @endauth
            @endif
            </ul>
        </div>

    </nav> -->
    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid navbar-dark">
                <a class="navbar-brand" href="#">Furniture</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link disabled">Disabled</a> -->
                    </div>
                </div>
                <div class="">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <div class="container my-5">
        {{ $slot }}
    </div>
</body>

</html>
