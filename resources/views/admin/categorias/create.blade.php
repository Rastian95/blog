@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categorias.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholer' => 'Ingrese el nombre']) !!}
                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Crear Categoría', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

