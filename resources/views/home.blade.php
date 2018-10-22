@extends('layouts.header')

@section('pageTitle', '| Home')

@section('content')

@component('components.carousel')
@endcomponent

<div class="container p-4" id="x">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/change.nav-color.js') }}" defer></script>
@endsection
