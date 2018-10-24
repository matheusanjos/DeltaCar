@extends('layouts.header')

@section('pageTitle', '| Cadastrar Cliente')

@section('content')
<div id="content">
    <div class="container m-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
        </ol>
    </div>

    <div class="container">
        <h1>Cadastro</h1>
        <hr>
    </div>
</div>

<script src="{{ asset('js/white.navbar.js') }}" defer></script>
@endsection
