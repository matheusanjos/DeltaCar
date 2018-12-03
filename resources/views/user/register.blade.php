@extends('layouts.app')

@section('pageTitle', '| Cadastro')

@section('content')
<div id="cadastro">
    <div class="block-content">

        <nav class="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ ('/') }}" title="Home">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    Cadastro
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
                                <h2 class="text-center page-title">Faça aqui seu Cadastro</h2>
                                <hr>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="sub-title my-4">Informações Pessoais</h5>
                            </div>

                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="cpf">* CPF</label>
                                    <input placeholder="CPF" type="text" class="form-control" name="cpf">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                        <label for="nome_completo">* Nome Completo</label>
                                        <input placeholder="Nome Completo" type="text" class="form-control" name="nome_completo" >
                                    </div>

                                    <div class="form-group col-lg-3 col-md-4 col-sm-5 col-xs-6">
                                        <label for="data_nascimento">* Data de Nascimento</label>
                                        <input placeholder="Data de Nascimento" type="text" class="form-control" name="data_nascimento">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <label for="email">* E-mail</label>
                                        <input placeholder="E-mail" type="email" class="form-control" name="email">
                                    </div>

                                    <div class="form-group col-lg-4 col-md-5 col-sm-6 col-xs-6">
                                        <label for="telefone">* Telefone</label>
                                        <input placeholder="Telefone" type="text" class="form-control" name="telefone">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="sub-title my-3">Dados da CNH</h5>
                            </div>

                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                        <label for="n_cnh">* Nº CNH</label>
                                        <input placeholder="Nº CNH" type="text" class="form-control" name="n_cnh">
                                    </div>

                                    <div class="form-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                        <label for="val_cnh">* Validade CNH</label>
                                        <input placeholder="Validade CNH" type="text" class="form-control" name="val_cnh">
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                        <label for="cat_cnh">* Categoria</label>
                                        <select class="form-control" name="cat_cnh">
                                            <option selected disabled>Selecione</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="sub-title my-3">Endereço</h5>
                            </div>

                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <label for="endereco">* Endereço</label>
                                        <input placeholder="Endereço" type="text" class="form-control" name="endereco">
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <label for="num">* Número</label>
                                        <input placeholder="Número" type="number" class="form-control" name="num">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <label for="bairro">* Bairro</label>
                                        <input placeholder="Bairro" type="text" class="form-control" name="bairro">
                                    </div>

                                    <div class="form-group col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <label for="cidade">* Cidade</label>
                                        <input placeholder="Cidade" type="text" class="form-control" name="cidade">
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                        <label for="uf">* UF</label>
                                        <select class="form-control" name="uf">
                                            <option selected disabled>Selecione</option>
                                            <option value="BA">BA</option>
                                            <option value="PE">PE</option>
                                            <option value="SP">SP</option>
                                            <option value="RJ">RJ</option>
                                            <option value="MG">MG</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn my-3 btn-outline-dark">
                                    Concluir
                                </button>
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
@endsection
