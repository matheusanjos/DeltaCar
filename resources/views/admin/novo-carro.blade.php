@extends('admin.layouts.admin')

@section('pageTitle', 'Cadastrar Veículo -')

@section('content')

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('admin.home') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('carros') }}">Carros</a>
            </li>
            <li class="breadcrumb-item active">Cadastro</li>
          </ol>

          <form action="/admin/carros" method="post" class="row" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid cadastro mt-4">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="text-center page-title">Cadastrar Veículo</h5>
                                <hr>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="modelo"><strong>Modelo</strong></label>
                                    <input placeholder="Modelo" type="text" class="form-control" name="modelo">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="marca"><strong>Marca</strong></label>
                                    <input placeholder="Marca" type="text" class="form-control" name="marca">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="imagem"><strong>Imagem</strong></label>
                                    <input type="file" class="form-control-file" name="imagem">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <label for="grupo"><strong>Grupo</strong></label>
                                    <select id="cat" name = "grupo" class="form-control">
                                        @foreach($grupos as $g)
                                            <option value = "{{$g->id}}">{{ $g->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <label for="quantidade"><strong>Quantidade</strong></label>
                                    <input placeholder="Quantidade" type="text" class="form-control" name="quantidade">
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <button type="submit" class="btn my-3 form-button">
                                    Finalizar
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Sticky Footer -->
        @include('layouts.footer')

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

 @endsection
