@extends('adminlte::page')
@section('title', 'Contratos')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('especiales.contratos.create')}}">Crear contrato</a>
    <a target="_blank" href="{{ route('especiales.contratos.fuecPdf') }}"><i class="fas fa-lg fa-file-pdf"></i></a>
    <h1>Administración de contratos</h1>
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
