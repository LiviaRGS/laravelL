<?php

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

Route::get('/soma/{valor}/{outrovalor}', function ($valor,$outrovalor) {
    return $valor+$outrovalor;
});