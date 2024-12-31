<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionBasicaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v1/informacion-basica', [InformacionBasicaController::class, 'index']);
Route::put('/v1/informacion-basica/{id}', [InformacionBasicaController::class, 'update']);
Route::delete('/v1/informacion-basica/{id}', [InformacionBasicaController::class, 'delete']);



Route::patch('v1/informacion-basica/{id}', [InformacionBasicaController::class, 'patch']);

