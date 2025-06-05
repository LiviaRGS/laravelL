<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function index(){
        return view('produtos.index');
    }

    function create(){
        return view('produtos.create');
    }
}
