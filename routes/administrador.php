<?php

use App\Http\Controllers\Administrador\PersonaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\UserController;
use App\Http\Controllers\Administrador\RoleController;

Route::resource('usuarios', UserController::class)->except('show')->names('administrador.usuarios');
Route::resource('roles', RoleController::class)->except('show')->names('administrador.roles');
Route::resource('personas', PersonaController::class)->names('administrador.personas');
Route::resource('vehiculos', VehiculoController::class)->names('administrador.vehiculos');
