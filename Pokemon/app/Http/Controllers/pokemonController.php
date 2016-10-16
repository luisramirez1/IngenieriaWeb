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

    public function actualizarPokemonV($id){
        $tipo = TiposPoke::all();
        $pokemon = Pokemon::find($id);
        return view('actualizarPokemon', compact('pokemon','tipo'));
    }

    public function actualizarPokemon($id, Request $datos){
        $nuevo = Pokemon::find($id);
        $tipo = Poke_Tipo::find($id);  
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
        $tipo->id=$datos->input('numeroPokemon');
        $tipo->id_tipo=$datos->input('tipo');
        $nuevo->save();
        $tipo->save();

        return Redirect('pokedex');
    }

    public function guardar(Request $datos){
    	$nuevo = new Pokemon;
        $tipo = new Poke_Tipo;
        $file = Input::file('imagen');
        $nombre = $file->getClientOriginalName();
        $file->move('img/pokemon', $nombre);
        $nuevo->id=$datos->input('numeroPokemon');
    	$nuevo->nombre=$datos->input('nombre');
    	$nuevo->altura=$datos->input('altura');
    	$nuevo->peso=$datos->input('peso');
    	$nuevo->categoria=$datos->input('categoria');
    	$nuevo->habilidad=$datos->input('habilidad');
    	$nuevo->descripcion=$datos->input('descripcion');
    	$nuevo->imagen=$nombre;
        $tipo->id=$datos->input('numeroPokemon');
        $tipo->id_tipo=$datos->input('tipo');
    	$nuevo->save();
        $tipo->save();

    	return Redirect('registrarPokemon');
    }

    public function pokedex(){
        $pokemon = Pokemon::all();
        $tipo = Poke_Tipo::all();
        return view('pokedex', compact('pokemon','tipo'));
    }

    public function pokedexTipos($id){
        $tipo = Poke_Tipo::all();
        $tipoColor = $id;
        $pokemon=DB::table('pokemon AS p')
            ->join('poke_tipo AS pt', 'p.id', '=', 'pt.id')
            ->where('pt.id_tipo', '=', $id)
            ->get();
        return view('pokedexTipos', compact('pokemon','tipo','tipoColor'));
    }

    public function pokeInformacion($id){
        $pokemon = Pokemon::find($id);
        $tipo=DB::table('tipo AS t')
            ->join('poke_tipo AS pt', 't.id', '=', 'pt.id_tipo')
            ->where('pt.id', '=', $id)
            ->select("t.nombre", "t.id")
            ->get();

        return view('pokeInformacion', compact('pokemon', 'tipo'));
    }
}
