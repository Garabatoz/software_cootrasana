@extends('adminlte::page')
@section('title', 'Pruebas')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('especiales.pruebas.create')}}">Crear Prueba</a>
    <h1>Pruebas</h1>
@stop

@section('content')
@include('sweetalert::alert')
<x-jet-banner />
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>

    </div>
@endif
@livewire('especiales.prueba-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
