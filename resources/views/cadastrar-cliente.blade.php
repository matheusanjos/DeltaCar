@extends('layouts.header')

@section('pageTitle', '| Cadastrar Cliente')

@section('content')
<div class="mx-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
    </ol>
</div>

<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 content">
    <div class="mx-4 mt-4"></div>
    <h1>Cadastro</h1>
    <hr>
</div>

<script src="{{ asset('js/white.navbar.js') }}" defer></script>
@endsection
