<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    function index(){
        $produtos = Produto::all();
        return view('produtos.index',["produtos" => $produtos]);
    }

    function create(){
        return view('produtos.create');
    }

    function store(ProdutoRequest $request){
        $dados = $request->validated();
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $caminhoImagem = $imagem->store('produtos', 'public'); 
            $dados['imagem'] = $caminhoImagem;
        }
        Produto::create($dados);
        
        return redirect()->route('produtos.index');
    }
}
