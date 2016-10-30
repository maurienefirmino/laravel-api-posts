<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

header('Access-Control-Allow-Origin: *');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );


Route::group(['prefix'=>'/posts'],function(){

	Route::get('/','PostController@index');
	Route::get('/deleta/{id}','PostController@excluir');
	Route::post('/','PostController@cadastro');
});


