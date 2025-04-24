<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
   
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou: {$valor}";
});

Route::get('calc/somar/{x}/{y}', [CalculosController::class, 'soma']);
Route::get('calc/sub/{x}/{y}', [CalculosController::class, 'sub']);
Route::get('calc/mult/{x}/{y}', [CalculosController::class, 'mult']);
Route::get('calc/divi/{x}/{y}', [CalculosController::class, 'divi']);
Route::get('calc/quad/{x}', [CalculosController::class, 'square']);

// Keep

Route::prefix('/keep')->group(function(){
    Route::get('/', [KeepController::class, 'index']);
});