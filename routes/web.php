<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticaController;
use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepController;
use App\Http\Controllers\MusicaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
Route::get('/autenticar/logout',[AutenticaController::class, 'logout'])->name('autentica.logout');
Route::post('/autenticar/login',[AutenticaController::class, 'login']);
Route::post('/autenticar/gravar',[AutenticaController::class, 'gravar'])->name('autentica.gravar');

Route::resource('produtos',ProdutosController::class);

require __DIR__.'/auth.php';

