@extends('adminlte::page')
@section('title', 'Inicio')

@can('administrador.usuarios.create')
    @section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('administrador.usuarios.create')}}">Crear usuario</a>
    <h1>Gestion de usuarios</h1>
    @stop
@endcan

@section('content')
@include('sweetalert::alert')
    @livewire('administrador.usuarios-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
