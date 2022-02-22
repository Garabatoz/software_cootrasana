@extends('adminlte::page')
@section('title', 'vehiculos')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('administrador.vehiculos.create')}}">Crear vehiculo</a>
    <h1>Administración de vehiculos</h1>
@stop
@section('content')
@include('sweetalert::alert')
{{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        <x-jet-banner />
@endif --}}
@livewire('administrador.vehiculo-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


