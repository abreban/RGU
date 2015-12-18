<?php


Route::get('/', function () {
    return view('app');
});
Route::get('auth/login','Auth\AuthController@getLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['middleware'=>'admin', 'prefix'=>'admin'], function(){
	Route::get('home', 				'AdminController@home');
	Route::post('addrole/{id}',  ['as'=>'addrole', 'uses'=>'AdminController@addRole']);
	Route::post('addpermission/{id}',  ['as'=>'addpermission', 'uses'=>'AdminController@addPermission']);
	Route::post('resetpassword/{id}',  ['as'=>'resetpassword', 'uses'=>'AdminController@resetPassword']);

	Route::resource('roles',			'RoleController');
	Route::resource('users',			'UsersController');
	Route::resource('permissions',			'PermissionsController');
});
	Route::get('home', 		'AdminController@index');


Route::get('/adventures', 'AdventuresController@index');
Route::get('/adventures/{id}/vote', 'AdventuresController@voteShow');
Route::post('/adventures/{id}/vote', 'AdventuresController@vote');
Route::post('/adventures/search', 'AdventuresController@search');

Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/{id}' , 'AuthorsController@show');
