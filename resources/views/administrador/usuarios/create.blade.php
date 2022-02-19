@extends('adminlte::page')
@section('title', 'Inicio')

@section('content_header')
    <h1>Crear usuario</h1>
@stop

@section('content')
    <div class="card">
        {!! Form::open(['route' => 'administrador.usuarios.store']) !!}
        <div class="card-body">
            <label class="h5">Nombre completo:</label>
            <input type="text" name="name" autocomplete="off" class="form-control">
            <label class="h5">E-mail:</label>
            <input type="email" name="email" autocomplete="off" placeholder="name@example.com" class="form-control">
            <label class="h5">Clave:</label>
            <input type="password" name="password" autocomplete="off" class="form-control">
            <h2 class="h5">Asignar rol</h2>
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
            {!! Form::submit('Guardar usuario', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
