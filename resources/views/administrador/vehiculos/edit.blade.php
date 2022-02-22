@extends('adminlte::page')
@section('title', 'Vehiculos')

@section('content_header')
    <h1>Editor de vehiculos</h1>
@stop

@section('content')
@livewire('administrador.vehiculo-edit',['vehiculo'=>$vehiculo])
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


