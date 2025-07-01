<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    function index(){
        $categorias = Categoria::all();
        return view('categoria.index',["categorias" => $categorias]);
    }

    function create(){
        return view('categoria.create');
    }

    function store(Request $request){
        Categoria::create(['nome' => $request->nome]);
        return redirect()->route('categoria.index');
    }
}
