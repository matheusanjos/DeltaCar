<div id="mainCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators hidden-indicators">
        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mainCarousel" data-slide-to="1"></li>
        <li data-target="#mainCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{ asset('images/argo.png') }}" alt="{{ config('app.name') }}" class="img-fluid d-none d-sm-block">
            <div class="carousel-caption d-block px-2">
                <h1>Delta Car</h1>
                <p>Alugue um carro em qualquer lugar!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/creta.png') }}" alt="{{ config('app.name') }}" class="img-fluid d-none d-sm-block">
            <div class="carousel-caption d-block px-2">
                <h1>Ofertas Imperdíveis!</h1>
                <p>Temos os melhores preços para você.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/mustang.png') }}" alt="{{ config('app.name') }}" class="img-fluid d-none d-sm-block">
            <div class="carousel-caption d-block px-2">
                <h1>Novos grupos de carros</h1>
                <p>Grupos especiais de carros esportivos e de colecionador.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
