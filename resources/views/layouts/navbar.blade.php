<nav class="navbar fixed-top navbar-expand-lg">
    <div class="container">
        <a href="{{ url('home') }}" class="navbar-brand">
            <img src="{{ asset('images/delta-car.png') }}" alt="{{ config('app.name') }}" width="150">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#itemsCollapse">
            <span class="fas fa-bars"></span>
        </button>

        <div id="itemsCollapse" class="collapse navbar-collapse text-center">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ url('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Aluguel</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Carros</a></li>
                @guest
                    <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">Login</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="#" class="dropdown-item">Sair</a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@component('components.modal-login')
@endcomponent