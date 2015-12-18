<?php


Route::get('/', function () {
    return view('app');
});

Route::get('/home', 'AdventuresController@topFive');


Route::get('auth/login','Auth\AuthController@getLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['middleware'=>'admin', 'prefix'=>'admin'], function(){
	Route::get('home', 		'AdminController@index');
});


Route::get('/adventures', 'AdventuresController@index');
Route::post('/adventures/search', 'AdventuresController@search');
Route::get('/adventures/create', 'AdventuresController@create');
Route::post('/adventures/create', 'AdventuresController@store');
Route::get('/adventures/{id}/show', 'AdventuresController@show');
Route::get('/adventures/{id}/vote', 'AdventuresController@voteShow');
Route::post('/adventures/{id}/vote', 'AdventuresController@vote');

