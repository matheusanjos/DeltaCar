<div id="carouselContainer">
    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators hidden-xs">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('images/argo.png') }}" class="img-fluid d-none d-sm-block">
                <div class="carousel-caption d-block">
                    <h1>Delta Car</h1>
                    <p style="font-size: 15pt;">Alugue um carro em qualquer lugar!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/creta.png') }}" class="img-fluid d-none d-sm-block">
                <div class="carousel-caption d-block">
                    <h1>Ofertas Imperdíveis!</h1>
                    <p style="font-size: 15pt;">Temos preços especiais para você cliente fiel.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/mustang.png') }}" class="img-fluid d-none d-sm-block">
                <div class="carousel-caption d-block">
                    <h1>Novos grupos de carros</h1>
                    <p style="font-size: 15pt;">Grupos especiais de carros esportivos e de colecionador.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
