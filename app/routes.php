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

Route::get('hora', function(){
    $data = new DateTime();

    return $data->format('m/d/Y');
});
Route::get('teste', function(){

});

Route::resource('attemails', 'AttemailsController');

Route::resource('users', 'UsersController');

Route::resource('departamentos', 'DepartamentosController');

Route::resource('acessos', 'AcessosController');