<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Especiales\ContratoController;
use App\Http\Controllers\Especiales\PruebaController;


Route::resource('contratos', ContratoController::class)->names('especiales.contratos');
Route::get('contratos_pdf/{contrato}', [ContratoController::class,'generarContratoPdf'])->name('especiales.contratos.pdf');
Route::resource('pruebas', PruebaController::class)->names('especiales.pruebas');
Route::get('fuecs_pdf', [ContratoController::class,'generarFuecPdf'])->name('especiales.contratos.fuecPdf');

