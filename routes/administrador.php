<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\VehiculoController;


Route::resource('vehiculos', VehiculoController::class)->names('administrador.vehiculos');
