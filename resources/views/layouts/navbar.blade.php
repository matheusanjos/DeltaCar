<nav class="navbar fixed-top navbar-expand-lg">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand js-scroll-trigger">
            <img src="{{ asset('images/delta-car.png') }}" alt="{{ config('app.name') }}" width="150">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#itemsCollapse">
            <span class="fas fa-bars"></span>
        </button>

        <div id="itemsCollapse" class="collapse navbar-collapse text-center">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link js-scroll-trigger">Home</a></li>
                <li class="nav-item"><a href="#aluguel" class="nav-link js-scroll-trigger">Aluguel</a></li>
                <li class="nav-item"><a href="#carros" class="nav-link js-scroll-trigger">Carros</a></li>
                @guest
                    <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">Login</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Sair
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
