@extends('adminlte::page')
@section('title', 'Inicio')

@section('content_header')
    <h4>Creación de personas</h4>
@stop
@section('content')
    @livewire('administrador.persona-create')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
