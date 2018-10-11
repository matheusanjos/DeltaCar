<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-gradient-dark">
    <div class="container">
        <a href="{{ asset('/') }}" class="navbar-brand">{{ config('app.name') }}</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#itemsCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="itemsCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ asset('/') }}" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link active">Carros</a></li>
                <li class="nav-item"><a href="#" class="nav-link active">Tarifas</a></li>
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link active">Login</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" class="nav-link active dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
