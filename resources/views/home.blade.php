@extends('layouts.app')

@section('pageTitle', '| Home')

@section('content')
    @component('components.main-carousel')
    @endcomponent

    <section id="aluguel">

        <div class="block-content">
            <div class="container-fluid my-5">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                        <h1>Alugue um carro</h1>
                    </div>

                    <div class="col-lg-10 col-sm-12 mt-3">
                        <div class="form-row">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <label for="local_retirada">Local de Retirada</label>
                                <input placeholder="Local de Retirada" type="text" class="form-control" name="local_retirada">
                            </div>

                            <div class="form-group col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <label for="data_retirada">Data de Retirada</label>
                                <input placeholder="Data de Retirada" type="text" class="form-control" name="data_retirada">
                            </div>

                            <div class="form-group col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <label for="data_entrega">Data de Entega</label>
                                <input placeholder="Data de Entega" type="text" class="form-control" name="data_entrega">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-outline-light">Alugar</button>
                    </div>

                </div>
            </div>
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

                <div class="dark col-lg-3 col-py mx-auto text-center text-light">
                    <img src="{{ asset('images/saveiro.png') }}" alt="{{ config('app.name') }}">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/scrolled.navbar.js') }}"></script>
@endsection
