<?php


Route::get('/', function () {
    return view('pages.home');
});
Route::get('/home', function(){
	return view('pages.home');
});
Route::get('/mirel', function(){
	return view('pages.home');
});
Route::get('auth/login','Auth\AuthController@getLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['middleware'=>'admin', 'prefix'=>'admin'], function(){
	Route::get('users', 			'AdminController@users');
	Route::get('user/{id}', 		'AdminController@user');
	Route::get('roles', 			'AdminController@roles');
	Route::get('roles/{id}',		'AdminController@role');
	Route::resource('role',			'RoleController');
	Route::get('permissions', 		'AdminController@permissions');	
});