<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotaRequest;
use App\Models\Nota;
use Illuminate\Http\Request;

class KeepController extends Controller
{
    public function index(){
        $notas = Nota::all();
        return view("keep/index",["notas"=> $notas]);
    }

    public function gravar(NotaRequest $request){
        $dados = $request->validated();
        Nota::create($dados);
        return redirect()->route('keep');
    }

    public function editar(Nota $nota, NotaRequest $request){
        if($request->isMethod('put')){
            $nota = Nota::find($request->id);
            $nota->fill($request->all());
            $nota->save();

            return redirect()->route('keep');
        }
        return view('keep.editar', ["nota" => $nota]);
        
    }
    public function apagar(Nota $nota){
        $nota->delete();
        return redirect()->route('keep');
    }
    
}
