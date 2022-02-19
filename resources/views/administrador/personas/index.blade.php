@extends('adminlte::page')
@section('title', 'Inicio')

@section('content_header')
@can('administrador.personas.create')
<a class="btn btn-secondary btn-sm float-right" href="{{route('administrador.personas.create')}}">Crear persona</a>
@endcan
    <h1>Personas</h1>
@stop
@section('content')
    @include('sweetalert::alert')
    @livewire('administrador.persona-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
