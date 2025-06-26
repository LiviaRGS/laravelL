<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index(){
        //session()->forget('carrinho');
       $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', ["carrinho" => $carrinho]);
    }

    public function adicionar(Produto $produto){
        $found = 0;
        $id = 0;
        $atual = session()->get('carrinho',[]);
        if(count($atual)>0){
            foreach($atual as $idP => $prod){
                if($prod['nome'] == $produto->nome){
                    $found = $prod['quantidade'];
                    $id = $idP;
                    break;
                }
            }
        }
        if($found == 0){
            $ar = $produto->attributesToArray();
            $ar['quantidade'] = 1;
            session()->push('carrinho',$ar);
        }else{
            $ar = $produto->attributesToArray();
            $ar['quantidade'] = $found+1;
            $atual[$idP] = $ar;
            session()->forget('carrinho');
            session()->put('carrinho', $atual);
        };
        
        return redirect()->route('carrinho.index');
    }
    public function remover($produto){
       
        $carrinho = session()->get('carrinho');
       
        if($carrinho[$produto]['quantidade'] > 1){
            $prod = $carrinho[$produto];
            $prod['quantidade']--;
            $carrinho[$produto] = $prod;
        
        }else{
            unset($carrinho[$produto]);
        }
        session()->forget('carrinho');
        session()->put('carrinho', $carrinho);
        return redirect()->route('carrinho.index');
    }
}
