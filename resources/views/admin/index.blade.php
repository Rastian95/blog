@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xxl-4">
            <x-card-post :post="$post" />
        </div>

    </div>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
