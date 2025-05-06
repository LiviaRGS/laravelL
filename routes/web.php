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
    Route::get('/', [KeepController::class, 'index'])->name('keep');
    Route::post('/gravar', [KeepController::class,'gravar'])->name('keep.gravar');
    Route::put('/editar', [KeepController::class,'editar'])->name('keep.editarGravar');
    Route::get('/editar/{nota}', [KeepController::class,'editar'])->name('keep.editar');
    Route::delete('/apagar/{nota}', [KeepController::class,'apagar'])->name('keep.apagar');
});