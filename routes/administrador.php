<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\UserController;
use App\Http\Controllers\Administrador\RoleController;

Route::resource('usuarios', UserController::class)->names('administrador.usuarios');
Route::resource('roles', RoleController::class)->names('administrador.roles');
