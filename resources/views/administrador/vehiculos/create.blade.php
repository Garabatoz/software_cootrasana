@extends('adminlte::page')
@section('title', 'Vehiculos')

@section('content_header')
    <h1>Creación de vehiculos</h1>
@stop

@section('content')
@livewire('administrador.vehiculo-create')
@stop
@include('sweetalert::alert')
{{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        <x-jet-banner />
@endif --}}

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
