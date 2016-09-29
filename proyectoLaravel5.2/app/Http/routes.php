<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/ejemplo', 'ejemploController@index');
Route::get('/inicio', 'ejemploController@inicio');
Route::get('/registroUsuario', 'ejemploController@registroUsuario');
Route::post('/guardarUsuario', 'usuarioController@guardar');
Route::get('/consultarUsuarios', 'usuarioController@consultar');
Route::get('/eliminarUsuarios/{id}', 'usuarioController@eliminar');
Route::get('/actualizarUsuarios/{id}', 'usuarioController@actualizarU');
Route::post('/actualizarUsuario/{id}', 'usuarioController@actualizar');
Route::get('/registroProyecto', 'ejemploController@registroProyecto');
Route::post('/guardarProyecto', 'proyectoController@guardar');
Route::get('/consultarProyectos', 'proyectoController@consultar');
Route::get('/eliminarProyectos/{id}', 'proyectoController@eliminar');
Route::get('/actualizarProyecto/{id}', 'proyectoController@actualizarP');
Route::post('/actualizarProyectos/{id}', 'proyectoController@actualizar');
Route::get('/generarPDFusuarios', 'usuarioController@generarPDFusuarios');
Route::get('/generarPDFproyectos', 'proyectoController@generarPDFproyectos');



/*Route::get('/', 'principalController@index');
Route::get('/home', 'principalController@home');*/
