@extends('adminlte::page')

@section('title', 'Editar Categoría')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($categoria, ['route' => ['admin.categorias.update', $categoria], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholer' => 'Ingrese el nombre']) !!}
                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Actualizar Categoría', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


