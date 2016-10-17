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
Route::get('/', 'principalController@home');
Route::get('/inicio', 'principalController@inicio');
Route::get('/registrarPokemon', 'pokemonController@registrarPokemon');
Route::post('/guardarPokemon', 'pokemonController@guardar');
Route::post('/actualizarPokemon/{id}', 'pokemonController@actualizarPokemon');
Route::get('/actualizarPokemon/{id}', 'pokemonController@actualizarPokemonV');
Route::get('/pokedex', 'pokemonController@pokedex');
Route::get('/poder/{id}', 'pokemonController@poder');
Route::get('/pokedexTipos/{id}', 'pokemonController@pokedexTipos');
Route::get('/pokeInformacion/{id}', 'pokemonController@pokeInformacion');
Route::get('/registrarEvo', 'pokemonController@registrarEvo');
Route::post('/guardarEvo', 'pokemonController@guardarEvo');
Route::get('/generarPDFPokemon/{id}', 'pokemonController@generarPDFPokemon');





