<?php

Route::group(['prefix' => 'cliente'], function () {
	Route::get('/create', 'ClienteController@create');
	Route::post('/create', 'ClienteController@store');
	Route::get('{id}/destroy', 'ClienteController@destroy');
	Route::get('{id}/edit', 'ClienteController@edit');
	Route::put('{id}/update', 'ClienteController@update');
});

Route::get('/', [
	'uses' => 'ClienteController@index',
	'as' => 'cliente',
]);
