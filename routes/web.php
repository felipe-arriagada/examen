<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionBasicaController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\ContactoRrssController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v1/informacion-basica', [InformacionBasicaController::class, 'index']);
Route::put('/v1/informacion-basica/{id}', [InformacionBasicaController::class, 'update']);
Route::delete('/v1/informacion-basica/{id}', [InformacionBasicaController::class, 'delete']);
Route::patch('v1/informacion-basica/{id}', [InformacionBasicaController::class, 'patch']);


Route::get('v1/quienes-somos', [QuienesSomosController::class, 'index']);
Route::put('v1/quienes-somos/{id}', [QuienesSomosController::class, 'update']);
Route::patch('v1/quienes-somos/{id}', [QuienesSomosController::class, 'update']);

Route::get('v1/contacto-rrss', [ContactoRrssController::class, 'index']);
Route::put('v1/contacto-rrss/{id}', [ContactoRrssController::class, 'update']);
Route::post('v1/contacto-rrss/create', [ContactoRrssController::class, 'create']);
Route::delete('/v1/contacto-rrss/{id}', [ContactoRrssController::class, 'delete']);
Route::patch('v1/contacto-rrss/{id}', [ContarctoRssController::class, 'patch']);


