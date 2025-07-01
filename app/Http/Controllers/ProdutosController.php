<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    function index(Request $request){
        if(isset($request->filtrar)){
            if($request->filtrar == 'noone'){
                $produtos = Produto::all();
            }else{
                $cate = Categoria::find($request->filtrar);
                $produtos = $cate->produtos;
            }
        }else{
            $produtos = Produto::all();
            
        }
        $categorias = Categoria::all();
            $use = [];
            foreach($categorias as $i){
                $use[$i->id] = $i->nome;
            }
        return view('produtos.index',["produtos" => $produtos,'categorias'=>$use]);
    }

    function create(){
        $categorias = Categoria::all();
        return view('produtos.create',["categorias" => $categorias]);
    }

    function store(ProdutoRequest $request){
        $dados = $request->validated();
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $caminhoImagem = $imagem->store('produtos', 'public'); 
            $dados['imagem'] = $caminhoImagem;
        }
        
        $categoria = Categoria::find($dados['categoria_id']);
        $produto = new Produto([
            'nome' => $dados['nome'],
            'preco' => $dados['preco'],
            'descricao' => $dados['descricao'],
            'categoria_id' => $dados['categoria_id'],
            'imagem' => $dados['imagem']
        ]);
        $categoria->produtos()->save($produto);
        return redirect()->route('produtos.index');
    }

}
