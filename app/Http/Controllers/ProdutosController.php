<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    function index(){
        return view('produtos.index');
    }

    function create(){
        return view('produtos.create');
    }

    function store(Request $request){
        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }
}
