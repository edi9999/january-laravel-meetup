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

Route::get('/', function()
{
	return View::make('hello')->with("_token",Session::token());
});


/*
 * Todo: create a basic route for showing items
 */

Route::group(array("before"=>"csrf"),function()
	{
		Route::resource('items', 'ItemsController');
	});
