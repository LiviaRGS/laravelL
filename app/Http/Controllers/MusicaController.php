<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;

class MusicaController extends Controller
{
    public function index(){
        $musicas = Musica::all();
        return view("musica/index",["musicas"=> $musicas]);
    }
    public function gravar(Request $request){
        if($request->isMethod("post")){
            Musica::create($request->all());
            return redirect()->route('musica');
        }
        return view("musica/criar");
    }

    public function editar(Musica $musica, Request $request){
        if($request->isMethod("put")){
            $musica = Musica::find($request->id);
            $musica->titulo = $request->titulo;
            $musica->artista = $request->artista;
            $musica->album = $request->album;
            $musica->genero = $request->genero;
            $musica->ano = $request->ano;
            $musica->save();

            return redirect()->route('musica');
        }
        return view('musica.editar', ["musica" => $musica]);
    }

    public function apagar(Musica $musica, Request $request){
        $musica->delete();
        return redirect()->route('musica');
    }
}
