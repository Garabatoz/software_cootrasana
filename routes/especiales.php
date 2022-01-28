<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Especiales\ContratoController;
use App\Http\Controllers\Especiales\PruebaController;


Route::resource('contratos', ContratoController::class)->names('especiales.contratos');
Route::get('contratos_pdf', [ContratoController::class,'generarContratoPdf'])->name('especiales.contratos.pdf');
Route::resource('pruebas', PruebaController::class)->names('especiales.pruebas');

