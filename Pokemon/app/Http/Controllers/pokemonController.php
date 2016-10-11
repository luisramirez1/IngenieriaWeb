<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
use App\Http\Requests;

class pokemonController extends Controller
{
    public function registrarPokemon(){
    	return view('registrarPokemon');
    }

    public function guardar(Request $datos){
    	$nuevo = new Pokemon;
    	$nuevo->nombre=$datos->input('nombre');
    	$nuevo->altura=$datos->input('altura');
    	$nuevo->peso=$datos->input('peso');
    	$nuevo->categoria=$datos->input('categoria');
    	$nuevo->habilidad=$datos->input('habilidad');
    	//$nuevo->tipo=$datos->input('correo');
    	$nuevo->descripcion=$datos->input('descripcion');
    	$nuevo->imagen=$datos->input('imagen');
    	$nuevo->save();
    	return Redirect('registrarPokemon');
    }
}
