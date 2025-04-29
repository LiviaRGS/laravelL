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
        dd($request->all());
    }
}
