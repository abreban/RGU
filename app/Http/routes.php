<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get 		('/', 				'HomeController@index'				);

// Authentication routes...
Route::get 		('auth/login', 		'Auth\AuthController@getLogin'		);
Route::post 	('auth/login', 		'Auth\AuthController@postLogin'		);
Route::get  	('auth/logout', 	'Auth\AuthController@getLogout'		);

// Registration routes...
Route::get 		('auth/register', 	'Auth\AuthController@getRegister'	);
Route::post 	('auth/register', 	'Auth\AuthController@postRegister'	);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
Route::get 		('api/adventure/all', 	'AdventureController@index'	);
Route::post     ('api/adventure/new',   'AdventureController@store');