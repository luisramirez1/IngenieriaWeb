<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pokemonController extends Controller
{
    public function inicio(){
    	return view('principal');
    }

    public function home(){
    	return view('home');
    }

    public function registrarPokemon(){
    	return view('registrarPokemon');
    }
}
