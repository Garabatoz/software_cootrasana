@extends('adminlte::page')
@section('title', 'Crear contrato')

@section('content_header')
    <h1>Creación de contratos</h1>
@stop

@section('content')
    {{-- {!! Form::open(['route' => 'pr.pr.store','autocomplete'=>'off']) !!}
        @csrf
        @livewire('especiales.contrato-create')
    {!! Form::close() !!} --}}
    @livewire('especiales.contrato-create')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

