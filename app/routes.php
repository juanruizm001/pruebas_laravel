<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('profesores/{nombre}/{edad}', function($nombre, $edad)
{
   return "Hola $nombre tu edad es $edad";
})->where(array('nombre'=>'[a-z, A-Z]+', 'edad'=>'[0-9]+'));


/*
Route::get('usuarios', function(){
    return "Hola Usuarios";
});

Route::get('usuario/{nombre?}', function($nombre=null){
    if (!$nombre)
    {
        return "Hola Usuario";
    }
    else
    {
        return "Hola $nombre";
    }
});

Route::match(array('GET','POST'), '/', function()
{
   return "GET POST";
});

Route::any('foo', function()
{
   return 'foo';
});

Route::get('foo', array('https', function()
{
    return "Must be over HTTPS";
}));
*/