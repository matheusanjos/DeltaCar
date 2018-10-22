<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} @yield('pageTitle')</title>
    <link rel="icon" href="{{ asset('images/logo.ico') }}"/>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- CSS Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg bg-color">
            <div class="container">
                <a href="/home" class="navbar-brand">
                   <img id="navbar-img" src="{{ asset('images/delta-car.png') }}" alt="{{ config('app.name') }}" width="150">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#itemsCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <div id="itemsCollapse" class="collapse navbar-collapse text-center">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item border-color"><a href="/home" class="nav-link link-color active">Home</a></li>
                        <li class="nav-item border-color"><a href="#" class="nav-link link-color active">Carros</a></li>
                        <li class="nav-item border-color"><a href="#" class="nav-link link-color active">Tarifas</a></li>
                        @guest
                            <li class="nav-item border-color"><a href="#" class="nav-link link-color active" data-toggle="modal" data-target="#modalLogin">Login</a></li>
                        @else
                            <li class="nav-item border-color dropdown">
                                <a href="#" id="navbarDropdown" class="nav-link link-color active dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @component('components.modal-login')
        @endcomponent

        <div id="main">
            @yield('content')
        </div>
    </div>
</body>
</html>
