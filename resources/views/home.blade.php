@extends('layouts.index')

@section('pageTitle', '| Home')

@section('content')
    @component('components.carousel')
    @endcomponent

    <div class="container">
        <h1 class="text-center text-dark">Bem-Vindo</h1>
    </div>
@endsection
