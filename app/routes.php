<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
| ROOT DIR
*/
Route::get('/',function(){
	return "Hola";
});

/*
| AUTH HANDLER
*/
Route::get('enter', array('as' => 'enter', 'uses' => 'EnterController@index'));
Route::post('login', array('as' => 'login', 'uses' => 'EnterController@login'));

/*
| ONLY-AUTH SECTION
*/
Route::group(array('before' => 'auth'), function()
{
	/*
	| AFTER LOGIN (TRUE) -> GO
	*/
	Route::get('go',array('as' => 'go', 'uses' => 'EnterController@enter'));
	/*
	|LOGOUT HANDLER
	*/
	Route::get('logout',array('as' => 'logout', 'uses' => 'EnterController@logout'));

	/*
	| APP ADMIN SECTIONS
	*/
	Route::resource('minimal','MinimalController');
	Route::resource('posts','PostsController');
});