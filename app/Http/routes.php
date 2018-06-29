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

Route::get('/', function () {
	$links = [
		'https://platzi.com/laravel' => 'Curso de Laravel',
		'https://laravel.com' => 'Página de Laravel'
	];
    return view('management', [
    	'teacher'=> 'Felipe Canasto',
    	'links' => $links,
    ]);
});

Route::auth();

Route::get('/home', 'HomeController@index');
