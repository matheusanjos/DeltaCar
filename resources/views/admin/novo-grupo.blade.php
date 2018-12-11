@extends('admin.layouts.admin')

@section('pageTitle', 'Grupos de Veículos -')

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
            <li class="breadcrumb-item active">Grupos</li>
          </ol>

          <form action="/admin/home" method="post" class="row">
            @csrf
            <div class="container-fluid cadastro mt-4">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="text-center page-title">Grupo de Veículos</h5>
                                <hr>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="nome"><strong>Nome do Grupo</strong></label>
                                    <input placeholder="Nome do Grupo" type="text" class="form-control" name="nome">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="descricao"><strong>Descrição</strong></label>
                                    <input placeholder="Descrição" type="text" class="form-control" name="descricao">
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 my-1">
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
