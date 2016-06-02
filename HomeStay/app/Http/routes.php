<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
/* General */
Route::auth ();

/* Webpage */
Route::get ( '/', function () {
	return view ( 'welcome' );
} );

Route::get ( '/login', function () {
	return view ( 'login' );
} );

Route::get ( '/home', 'HomeController@index' );

/* Mobile Application */
Route::post ( '/login', 'UserController@login' );



Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
