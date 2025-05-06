<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class KeepController extends Controller
{
    public function index(){
        $notas = Nota::all();
        return view("keep/index",["notas"=> $notas]);
    }

    public function gravar(Request $request){
        Nota::create($request->all());
        return redirect()->route('keep');
    }

    public function editar(Nota $nota, Request $request){
        if($request->isMethod('put')){
            $nota = Nota::find($request->id);
            $nota->texto = $request->texto;
            $nota->save();

            return redirect()->route('keep');
        }
        return view('keep.editar', ["nota" => $nota]);
        
    }
}
