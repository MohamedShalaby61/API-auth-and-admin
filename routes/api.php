<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




//user controller routes
Route::post('register', 'App\Http\Controllers\API\UserController@register');
Route::post('login', 'App\Http\Controllers\API\UserController@login');
Route::get('user', 'App\Http\Controllers\API\UserController@getAuthenticatedUser')->middleware('jwt.verify');

//mobile verification Routes
Route::post('service', 'App\Http\Controllers\API\UserVerificationController@verificationService');
Route::get('send_verification', 'App\Http\Controllers\API\UserVerificationController@sendVerificationTokens');
Route::get('check_verification', 'App\Http\Controllers\API\UserVerificationController@checkVerificationToken');
