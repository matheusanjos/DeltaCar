@extends('layouts.app')

@section('pageTitle', '| Home')

@section('content')
    @component('components.main-carousel')
    @endcomponent

    <section id="aluguel">
        <form action="/" method="post">
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
                                    <input placeholder="Data de Retirada" type="date" class="form-control" name="data_retirada">
                                </div>

                                <div class="form-group col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <label for="data_entrega">Data de Entega</label>
                                    <input placeholder="Data de Entega" type="date" class="form-control" name="data_entrega">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#chooseCar">Alugar</button>
                        </div>

                    </div>
                </div>
            </div>

            <div id="chooseCar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="chooseCarLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-dark">Escolha um Carro</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body p-4">
                            <div class="table-responsive">
                                <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Modelo</th>
                                        <th>Marca</th>
                                        <th>Grupo</th>
                                        <th>Miniatura</th>
                                        <th>Alugue</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carros as $c)
                                            <tr>
                                                <td>{{ $c->modelo }}</td>
                                                <td>{{ $c->marca }}</td>
                                                <td class="cart">
                                                    <a data-toggle="tooltip" title="<p> {{$c->grupo["descricao"]}} </p>">
                                                        {{ $c->grupo["nome"] }}
                                                    </a>
                                                </td>
                                                <td class="cart">
                                                    <a data-toggle="tooltip" title="<img  width=90% src='../storage/{{$c->imagem}}' />">
                                                        <img width=45px src="../storage/{{$c->imagem}}"/>
                                                    </a>
                                                </td>
                                                <td><a class="btn btn-dark" href="{{ url('home#aluguel') }}">Alugue</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <section id="carros">
        <div class="container-fluid">
            <div class="row">
                <div class="bg-light col-lg-9 col-py px-5 mx-auto text-center">
                    <h2>Conheça nossa frota!</h2>
                    <hr class="m-4 dark">
                    <p class="text-black-50 px-5">Com uma grande diversidade de veículos, a Delta Car disponibiliza carros de todos os tipos e para todos os gostos.</p>
                    <p class="text-black-50 mb-4">Venha conheçer mais!</p>
                    <a class="btn btn-outline-dark" href="{{ url('carros') }}">Confira</a>
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
    <script>
        $('a[data-toggle="tooltip"]').tooltip({
            animated: 'fade',
            placement: 'bottom',
            html: true
        });
    </script>
@endsection
