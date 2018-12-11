@extends('layouts.app')

@section('pageTitle', '| Grupo de Carros')

@section('content')
<div id="cadastro">
    <div class="block-content">

        <nav class="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ ('/') }}" title="Home">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    Carros
                </li>
            </ol>
        </nav>

        <form action="/usuario/cadastro" method="post">
            @csrf

            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="text-center page-title">Grupo de Carros</h2>
                                <hr>
                            </div>

                            <div class="card mb-3 col-12">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Lista de carros
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Modelo</th>
                                            <th>Marca</th>
                                            <th>Grupo</th>
                                            <th>Miniatura</th>
                                            <th>Alugue</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Modelo</th>
                                            <th>Marca</th>
                                            <th>Grupo</th>
                                            <th>Miniatura</th>
                                            <th>Alugue</th>
                                        </tr>
                                        </tfoot>
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
                </div>
            </div>

        </form>

    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/white.navbar.js') }}"></script>
    <script>
        $('a[data-toggle="tooltip"]').tooltip({
            animated: 'fade',
            placement: 'bottom',
            html: true
        });
    </script>
@endsection
