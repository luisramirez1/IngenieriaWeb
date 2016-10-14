<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiposPoke;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class principalController extends Controller
{
    public function inicio(){
    	return view('principal');
    }

    public function home(){
    	return view('home');
    }
}
