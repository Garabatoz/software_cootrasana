@extends('adminlte::page')
@section('title', 'Contratos')

@section('content_header')
    @can('especiales.contratos.create')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('especiales.contratos.create')}}">Crear contrato</a>
    <h1>Administración de contratos</h1>
    @endcan
@stop
@section('content')
@include('sweetalert::alert')
{{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        <x-jet-banner />
@endif --}}
@livewire('especiales.contrato-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
