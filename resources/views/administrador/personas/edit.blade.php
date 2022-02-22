@extends('adminlte::page')
@section('title', 'Inicio')

@section('content_header')
    <h1>Edicion de personas</h1>
@stop

@section('content')
    @livewire('administrador.persona-edit',['persona' => $persona])
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
