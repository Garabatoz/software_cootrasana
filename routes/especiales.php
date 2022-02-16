<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Especiales\ContratoController;
use App\Http\Controllers\Especiales\PruebaController;
use App\Http\Livewire\Especiales\ContratoCreate;


Route::resource('contratos', ContratoController::class)->except('show')->names('especiales.contratos');
Route::get('contratos_pdf/{contrato}', [ContratoController::class,'generarContratoPdf'])->middleware('can:especiales.contratos.generarPdf')->name('especiales.contratos.pdf');
Route::resource('pruebas', PruebaController::class)->names('especiales.pruebas');


