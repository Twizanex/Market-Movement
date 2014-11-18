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
	return View::make('admin3.index');
});

Route::get('dashboard', function()
{
	return View::make('admin3.dashboard');
});

Route::get('home', function()
{
	return View::make('page.home');
});

Route::get('contact', function()
{
	return View::make('page.contact');
});

Route::get('stock', function()
{
	return View::make('page.stock');
});

Route::get('watchlist_edit', function()
{
	return View::make('page.watchlist_edit');
});

Route::get('demo', function()
{
	return View::make('page.demo');
});

Route::get('first', function()
{
	return View::make('layouts.first');
});

Route::get('hello', function()
{
	return View::make('layouts.hello');
});

Route::get('users', function()
{
    return View::make('layouts/users');
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

