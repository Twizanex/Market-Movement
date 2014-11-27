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
	if (Session::has('uid'))
	{
		if( $user_role->role == 'user')
		{
			return Redirect::to('stock');
		}
		else if ($user_role->role == 'admin')
		{
			return Redirect::to('watchlist_edit');
		}
	}

	return View::make('page.login');
});

Route::get('dashboard', function()
{	
	// $data = Session::all();
	// Session::put('apple', '2000');
	// var_dump($data);
	// echo '<pre>'.print_r($data).'</pre>';
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

Route::get('watchlist', function()
{
	return View::make('page.watchlist');
});

Route::get('watchlist_edit', function()
{
	return View::make('page.watchlist_edit');
});

Route::get('login', function()
{
	return View::make('page.login');
});

Route::post('login_verify', function()
{
	$user = DB::table('users')->where('name', $_REQUEST['username'])->first();
	$user_pw = DB::table('users_pw')->where('UID', $user->UID)->first();
	if( $user_pw->password == $_REQUEST['password'])
	{
		Session::put('uid', $user->UID);
	}
	else
		return Redirect::to('login');

	$user_role = DB::table('users_role')->where('id_role', $user->role)->first();

	if( $user_role->role == 'user')
	{
		return Redirect::to('stock');
	}
	else if ($user_role->role == 'admin')
	{
		return Redirect::to('watchlist_edit');
	}
});

Route::get('logout', function()
{
	Session::flush();
	return View::make('page.login');
});

Route::post('register', function()
{
	//var_dump($_REQUEST);
	DB::insert('insert into users (name, email, join_date) values (?, ?, ?)', array($_REQUEST['username'], $_REQUEST['email'], date("Y-m-d")));
	$user = DB::table('users')->where('name', $_REQUEST['username'])->first();
	//var_dump($user);
	DB::insert('insert into users_pw (UID, password) values (?, ?)', array( $user->UID, $_REQUEST['password']));

	return Redirect::to('login');
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

