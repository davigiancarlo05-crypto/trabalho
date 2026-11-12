<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\EntregaController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/sobre', [PaginaController::class, 'sobre']);
Route::get('/entregas', [EntregaController::class, 'index']);