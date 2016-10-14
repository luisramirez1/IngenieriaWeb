<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
use App\TiposPoke;
use App\Poke_Tipo;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;

class pokemonController extends Controller
{
    public function registrarPokemon(){
        $tipo = TiposPoke::all();
    	return view('registrarPokemon', compact('tipo'));
    }

    public function guardar(Request $datos){
    	$nuevo = new Pokemon;
        $tipo = new Poke_Tipo;
        $file = Input::file('imagen');
        $nombre = $file->getClientOriginalName();
        $tipos = $datos->input("tipo");
        $file->move('img/pokemon', $nombre);
        $nuevo->id=$datos->input('numeroPokemon');
    	$nuevo->nombre=$datos->input('nombre');
    	$nuevo->altura=$datos->input('altura');
    	$nuevo->peso=$datos->input('peso');
    	$nuevo->categoria=$datos->input('categoria');
    	$nuevo->habilidad=$datos->input('habilidad');
    	$nuevo->descripcion=$datos->input('descripcion');
    	$nuevo->imagen=$nombre;
        $tipo->id_poke=$datos->input('numeroPokemon');
        $tipo->id_tipo=$datos->input('tipo');
    	$nuevo->save();
        $tipo->save();

    	return Redirect('registrarPokemon');
    }

    public function pokedex(){
        $pokemon = Pokemon::all();
        $tipo = TiposPoke::all();
        return view('pokedex', compact('pokemon','tipo'));
    }

    public function pokeInformacion($id){
        $pokemon = Pokemon::find($id);
        $tipo=DB::table('tipo AS t')
            ->join('poke_tipo AS pt', 't.id', '=', 'pt.id_tipo')
            ->where('pt.id_poke', '=', $id)
            ->select("t.nombre", "t.id")
            ->get();

        return view('pokeInformacion', compact('pokemon', 'tipo'));
    }
}
