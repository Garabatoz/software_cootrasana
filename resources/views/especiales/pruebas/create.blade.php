@extends('adminlte::page')
@section('title', 'Pruebas')

@section('content_header')
    <h1>Creación de pruebas</h1>
@stop

@section('content')
@livewire('especiales.prueba-create')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
