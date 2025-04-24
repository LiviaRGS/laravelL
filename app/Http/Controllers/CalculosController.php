<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function soma($x, $y){
        return 'Soma: '.$x+$y;
    }
    function sub($x, $y){
        return 'Subtração: '.$x-$y;
    }
    function mult($x, $y){
        return 'Multiplicação: '.$x*$y;
    }
    function divi($x, $y){
        if($y != 0){
            return 'Divisão: '.$x/$y;
        }else{
            return 'Sem divisão por 0 >:(';
        }
    }
    function square($x){
        return 'Quadrado: '.$x**2;
    }
}
