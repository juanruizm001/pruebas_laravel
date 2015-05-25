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
    return View::make('login.login');
});

Route::pattern('nombre', '[a-z, A-Z]+');
Route::pattern('edad', '[0-9]+');

//Validacion de grupos mediante sesiones
Route::group(array('before'=>'session'), function()
{
    Route::get('profesores/{nombre}/{edad}', function($nombre, $edad)
    {
        return "Hola $nombre tu edad es $edad";
    })/*->where(array('nombre'=>'[a-z, A-Z]+', 'edad'=>'[0-9]+'))*/;

    Route::get('estudiantes/{nombre}/{edad}', function($nombre, $edad)
    {
        return "Hola $nombre tu edad es $edad";
    });
});



Route::get('session/crear', function()
{
    Session::put('nombre', 'Juan');
    return 'Se creó la sesión correctamente';
});

Route::get('session/eliminar', function()
{
    Session::forget('nombre');
    return 'El campo nombre fue eliminado de la sesión actual';
});

Route::resource('noticias', 'NoticiasController');
Route::controller('users', 'UserController');

Route::post('noticias/create', function()
{
    return Input::get('__token');
})->before('csrf');

Route::get('hola', function()
{
    return View::make('hola');
});