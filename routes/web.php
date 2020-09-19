<?php

use Illuminate\Support\Facades\Route;



//admin login
Route::prefix('admin/')->group(function() {

	Route::get('login','App\Http\Controllers\AdminController@getAdminLogin');
	Route::post('login','App\Http\Controllers\AdminController@postAdminLogin');
    

});


//admin routes
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function()
{
		Route::get('/','App\Http\Controllers\AdminController@index');
		Route::get('/user/all','App\Http\Controllers\UserOperationController@index');
		Route::get('/user/create','App\Http\Controllers\UserOperationController@create');
		Route::post('/user/store','App\Http\Controllers\UserOperationController@store');
		Route::get('/user/{id}/edit','App\Http\Controllers\UserOperationController@edit');
		Route::put('/user/{id}/update','App\Http\Controllers\UserOperationController@update');
		Route::delete('/user/{id}/delete','App\Http\Controllers\UserOperationController@delete');

});


