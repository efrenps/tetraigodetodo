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

/*Route::get('/', function()
{
	return "hello Alejandra ;)";
});*/

#site routes
Route::get('/', 'site\SiteController@index');
Route::get('test', 'site\SiteController@test');

#app routes
Route::get('login', 'app\LoginController@index');