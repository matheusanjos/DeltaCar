<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Área do Administrador | {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- CSS Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div id="admin">

        <div class="container">
            <div class="login-form">
                <div class="main-div">
                        <div class="panel">
                            <h2>Admin Login</h2>
                            <p>Please enter your email and password</p>
                        </div>
                    <form id="Login" method="POST" action="{{ route('admin.login.submit') }}">

                        <div class="form-group">


                            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">

                        </div>
                        <div class="forgot">
                            <a href="reset.html">Forgot password?</a>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>

                    </form>
                </div>
                <p class="botto-text"> Designed by Sunil Rajput</p>
            </div>
        </div>

    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
