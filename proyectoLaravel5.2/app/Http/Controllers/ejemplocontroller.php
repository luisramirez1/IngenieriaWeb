<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ejemplocontroller extends Controller
{
    public function index(){
    	return view('principal');
    }

    public function inicio(){
    	return view('home');
    }
    
    public function registroUsuario(){
    	return view('registroUsuario');
    }

    public function registroProyecto(){
    	return view('registroProyecto');
    }
}

