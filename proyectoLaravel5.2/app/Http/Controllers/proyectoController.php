<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class proyectoController extends Controller
{
    public function guardar(Request $datos){
    	$nuevo = new Proyecto;
    	$nuevo->nombre=$datos->input('nombre');
    	$nuevo->f_inicio=$datos->input('fechaI');
    	$nuevo->f_fin=$datos->input('fechaF');
    	$nuevo->save();
    	return Redirect('registroProyecto');
    }

    public function consultar(){
    	$proyectos= Proyecto::all();
    	return view('consultarProyectos', compact('proyectos'));
    }

    public function eliminar($id){
    	Proyecto::find($id)->delete();
    	return Redirect('consultarProyectos');
    }

	public function actualizar($id, Request $datos){
    	$nuevo = Proyecto::find($id);
    	$nuevo->nombre=$datos->input('nombre');
    	$nuevo->f_inicio=$datos->input('fechaI');
    	$nuevo->f_fin=$datos->input('fechaF');
    	$nuevo->save();
    	return Redirect('consultarProyectos');
    }

    public function actualizarP($id){
    	$proyecto = Proyecto::find($id);
    	return view('actualizarProyecto', compact('proyecto'));
    }

    public function generarPDFproyectos(){
        $proyecto=Proyecto::all();
        $vista=view('pdfProyectos', compact('proyecto'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('ListaProyectos.pdf');
    }

    public function asignarUsuarios($id){
        //dd($id);
        $proyecto = Proyecto::find($id);
        $usuarios = Usuario::all();
        return view('asignarUsuarios', compact('usuarios'), compact('proyecto'));
    }
}
