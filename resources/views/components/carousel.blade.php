<div id="carouselContainer">
    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="img-fluid w-25 mx-auto" src="{{ asset('images/creta.png') }}" alt="Second slide">
                <div class="carousel-caption d-block">
                    <h2>Delta Car</h2>
                    <p>...</p>
                </div>
            </div>
            {{-- <div class="carousel-item">
                <img class="img-fluid w-50" src="..." alt="Second slide">
                <div class="carousel-caption d-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-50" src="..." alt="Third slide">
                <div class="carousel-caption d-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div> --}}
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
