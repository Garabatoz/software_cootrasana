@extends('adminlte::page')
@section('title', 'Inicio')
@can('administrador.roles.create')
    @section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('administrador.roles.create')}}">Crear rol</a>
    <h1>Gestion de roles</h1>
    @stop
@endcan

@section('content')
@include('sweetalert::alert')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            @can('administrador.roles.edit')
                            <td width="10px"><a href="{{route('administrador.roles.edit',$rol)}}" class="btn btn-primary">Editar</a></td>
                            @endcan
                            @can('administrador.usuarios.destroy')
                            <td width="10px">
                                <form action="{{route('administrador.roles.destroy',$rol)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
