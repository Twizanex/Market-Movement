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
	// $users = DB::table('user')->get();

	// foreach ($users as $user)
	// {
	//     var_dump($user->name);
	// }
	return View::make('admin3/index');
});

Route::get('hello', function()
{
	//return View::make('hello');
	return Redirect::to('admin3js');
});

Route::get('users', function()
{
    return View::make('users');
});

Route::get('home', function()
{
	return Redirect::to('frontend/index.html');
});

Route::get('admin3h', function()
{
    return Redirect::to('admin3/index.html');
});

Route::get('admin3js', function()
{
    return View::make('admin3/angularjs/index');
});



Route::get('ecommerce_index', function()
{
    return View::make('admin3/ecommerce_index');
});

