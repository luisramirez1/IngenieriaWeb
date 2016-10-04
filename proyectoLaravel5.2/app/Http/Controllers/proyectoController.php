<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\usuarios_proyectos;
use DB;
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
        $usuarios=DB::table('usuario AS u')
            ->join('usuarios_proyectos AS up', 'u.id', '=', 'up.id_usuario')
            ->where('up.id_proyecto', '=', $id)
            ->get();
       
        $lista=DB::table('usuarios_proyectos AS up')
            ->where('up.id_proyecto', '=', $id)
            ->Lists('up.id_usuario');
        //utilizar leftjoin
        $usuariosNo=DB::table('usuario')
            ->whereNotIn('id', $lista)
            ->get();

        //dd($usuariosNo);
        $proyecto=Proyecto::find($id);

        return view('asignarUsuarios', compact('usuarios', 'proyecto','usuariosNo'));
        //dd($id);
        /*$proyecto = Proyecto::find($id);
        $usuarios = Usuario::all();
        return view('asignarUsuarios', compact('usuarios'), compact('proyecto'));*/
    }

    public function usuarioProyecto($id, Request $datos){
        $nuevo = new usuarios_proyectos;
        $nuevo->id_proyecto=$id;
        $nuevo->id_usuario=$datos->input('user');
        $nuevo->save();

        return Redirect('/asignarUsuarios/'.$id);

    }
}
