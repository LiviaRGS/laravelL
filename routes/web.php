<?php

use App\Http\Controllers\AutenticaController;
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
    Route::get('/lixeira', [KeepController::class,'lixeira'])->name('keep.lixeira');
    Route::get('/restaurar/{nota}', [KeepController::class,'restaurar'])->name('keep.restaurar');
});

Route::get('/autenticar',[AutenticaController::class, 'index'])->name('autentica');
Route::get('/autenticar/login',[AutenticaController::class, 'login'])->name('autentica.login');
Route::post('/autenticar/login',[AutenticaController::class, 'login']);
Route::post('/autenticar/gravar',[AutenticaController::class, 'gravar'])->name('autentica.gravar');