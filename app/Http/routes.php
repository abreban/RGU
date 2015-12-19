<?php
// Home Route
Route::get('/', 'HomeController@index');
//Auth Routes
Route::get('auth/login','Auth\AuthController@getLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
//User Management Routes
Route::group(['middleware'=>'admin', 'prefix'=>'admin'], function(){
	Route::get('home', 					'AdminController@home');
	Route::post('addrole/{id}',  		['as'=>'addrole', 'uses'=>'AdminController@addRole']);
	Route::post('addpermission/{id}',  	['as'=>'addpermission', 'uses'=>'AdminController@addPermission']);
	Route::post('resetpassword/{id}',  	['as'=>'resetpassword', 'uses'=>'AdminController@resetPassword']);
	Route::resource('roles',			'RoleController');
	Route::resource('users',			'UsersController');
	Route::resource('permissions',		'PermissionsController');
});
//Adventure Routes
Route::get('/adventures', 'AdventuresController@index');
Route::post('/addpicture/{id}', 'AdventuresController@addpic');
Route::get('/adventures/{id}/vote', 'AdventuresController@voteShow');
Route::post('/adventures/{id}/vote', 'AdventuresController@vote');
Route::get('/adventures/{id}/show','AdventuresController@show');
Route::post('/adventures/search', 'AdventuresController@search');
Route::get('/adventures/create', 'AdventuresController@create');
Route::post('/adventures/create', 'AdventuresController@store');
//Author Routes
Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/{id}' , 'AuthorsController@show');
Route::get('/comments/create/{id}', "CommentsController@show");
Route::post('/comments/create', "CommentsController@store");
Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/{id}' , 'AuthorsController@show');