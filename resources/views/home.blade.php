@extends('layouts.header', ["current"=>"home"])

@section('pageTitle', '| Home')

@section('content')
    <section id="aluguel">
        <div class="container-fluid py-5">

            <h1>Alugue um carro</h1>

            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-10 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="">Local de retirada</label>
                                <input type="text" name="local" class="form-control" placeholder="Informe o local">
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <label for="">Data/Hora de retirada</label>
                                <input type="text" name="data" class="form-control">
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <label for="">Data/Hora de devolução</label>
                                <input type="text" name="hora" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-12">
                        <button title="Alugue um carro" type="submit" class="btn btn-outline-light">Alugar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="carros">
        <div class="container-fluid">
            <div class="row">
                <div class="bg-light col-lg-9 col-py px-5 mx-auto text-center">
                    <h2>Conheça nossa frota!</h2>
                    <hr class="m-4 dark">
                    <p class="text-black-50 px-5">Com uma grande diversidade de veículos, a Delta Car disponibiliza carros de todos os tipos e para todos os gostos.</p>
                    <p class="text-black-50 mb-4">Venha conheçer mais!</p>
                    <a class="btn btn-outline-dark" href="#">Confira</a>
                </div>

                <div class="bg-dark col-lg-3 col-py mx-auto text-center text-light">
                    <img src="{{ asset('images/saveiro.png') }}" alt="{{ config('app.name') }}">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/scrolled.navbar.js') }}"></script>
@endsection
