<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepController;
use App\Http\Controllers\MusicaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
   
});

Route::prefix('/keep')->group(function (){
    Route::get('/', [KeepController::class,'index'])->name('keep');
    Route::get('/criar', [KeepController::class,'gravar'])->name('keep.criar');
    Route::post('/gravar', [KeepController::class,'gravar'])->name('keep.gravar');
    Route::get('/editar/{nota}', [KeepController::class,'editar'])->name('keep.editar');
    Route::put('/editar', [KeepController::class,'editar'])->name('keep.editarGravar');
    Route::delete('/apagar/{nota}', [KeepController::class,'apagar'])->name('keep.apagar');
});