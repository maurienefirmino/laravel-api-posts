<?php

Route::group(['prefix'=>'/posts'],function(){

	$ctrl = "PostController@";

	Route::get('/',$ctrl+'index');
	Route::get('/deleta/{id}',$ctrl+'excluir');
	Route::post('/',$ctrl+'cadastro');
});