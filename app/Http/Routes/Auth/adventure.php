<?php
Route::get 			('api/adventure/index', 		'AdventureController@index'		);
Route::post     	('api/adventure/store',   		'AdventureController@store'		);

Route::put     		('api/adventure/{id}/update',   'AdventureController@update'	);
Route::get      	('api/adventure/{id}/show',   	'AdventureController@show'		);
Route::delete      	('api/adventure/{id}/destroy',  'AdventureController@destroy'	);