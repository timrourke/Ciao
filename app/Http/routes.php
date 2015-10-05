<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

///Route::get('/', 'WelcomeController@index');

/**
 * User routes
 *
 */

Route::get(			'/api/users', 					'UserController@index');
Route::get(			'/api/users/{id}', 			'UserController@get');
Route::post(		'/api/users', 					'UserController@create');
Route::put(			'/api/users/{id}', 			'UserController@update');
Route::delete(	'/api/users/{id}', 			'UserController@destroy');

/**
 * Ember catch-all route for bootstrapping SPA
 *
 */

Route::get('{data?}', function(){
	return View::make('app');
})->where('data', '.*');