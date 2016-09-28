<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;  //importar modelo
use App\Http\Requests;
use App\Http\Controllers\Controller;

class usuarioController extends Controller
{
    public function guardar(Request $datos){
    	$nuevo = new Usuario;
    	$nuevo->nombre=$datos->input('nombre');
    	$nuevo->edad=$datos->input('edad');
    	$nuevo->sexo=$datos->input('sexo');
    	$nuevo->correo=$datos->input('correo');
    	$nuevo->save();
    	return Redirect('registroUsuario');
    }

    public function consultar(){
    	$usuarios= Usuario::all();
    	return view('consultarUsuarios', compact('usuarios'));
    }

    public function eliminar($id){
    	Usuario::find($id)->delete();
    	return Redirect('consultarUsuarios');
    }

    public function actualizar($id, Request $datos){
    	$nuevo = Usuario::find($id);
    	$nuevo->nombre=$datos->input('nombre');
    	$nuevo->edad=$datos->input('edad');
    	$nuevo->sexo=$datos->input('sexo');
    	$nuevo->correo=$datos->input('correo');
    	$nuevo->save();
    	return Redirect('consultarUsuarios');
    }

    public function actualizarU($id){
    	$usuarios = Usuario::find($id);
    	return view("actualizarUsuarios", compact('usuarios'));
    }

    // public function actualizar($id){
    // 	Usuario::find($id)
    // }
}
