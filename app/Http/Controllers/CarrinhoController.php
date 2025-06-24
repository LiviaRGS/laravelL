<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index(){
        
       $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', ["carrinho" => $carrinho]);
    }

    public function adicionar(Produto $produto){
        session()->push('carrinho',$produto);
        return redirect()->route('carrinho.index');
    }
    public function remover($produto){
        $carrinho = session()->get('carrinho');
        unset($carrinho[$produto]);
        session()->forget('carrinho');
        session()->put('carrinho', $carrinho);
        return redirect()->route('carrinho.index');
    }
}
