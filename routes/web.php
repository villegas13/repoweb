<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/vista', function () {
    return view('vista');
});




Route::resource('equipos', EquipoController::class);
Route::get('resultados', [EquipoController::class, 'resultados'])->name('equipos.resultados');


