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

	// if (Session::has('uid'))
	// {
	// 	$uid = Session::get('uid', 'default');
	// 	$user = DB::table('users')->where('UID', $uid)->first();
	// 	$user_role = DB::table('users_role')->where('id_role', $user->role)->first();

	// 	if( $user_role->role == 'user')
	// 	{
	// 		return Redirect::to('stock');
	// 	}
	// 	else if ($user_role->role == 'admin')
	// 	{
	// 		return Redirect::to('user_edit');
	// 	}
	// }

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

Route::get('watchlist_edit', function()
{
	return View::make('page.watchlist_edit');
});

Route::get('watchlist', function()
{
	return View::make('page.watchlist');
});


Route::get('user_edit', function()
{

	if (Session::has('uid'))
	{
		$uid = Session::get('uid', 'default');
		$user = DB::table('users')->where('UID', $uid)->first();
		$user_role = DB::table('users_role')->where('id_role', $user->role)->first();

		if( $user_role->role == 'user')
		{
			return View::make('page.login');
		}
		else if ($user_role->role == 'admin')
		{
			return View::make('page.user_edit');
		}
	}

	return View::make('page.login');
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
		return Redirect::to('user_edit');
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

//User edit
Route::post('user_update', function()
{
	if($_REQUEST['action'] == 1)
	{
		DB::table('users')->where('UID', $_REQUEST['uid'])
					->update(array('name' => $_REQUEST['name'],
									'email' => $_REQUEST['email'],
									'join_date' => $_REQUEST['join_date'], 
									'last_active' => $_REQUEST['last_active']
							));

		DB::table('users_pw')->where('UID', $_REQUEST['uid'])
					->update(array('password' => $_REQUEST['pass']));
	}
	else
	if($_REQUEST['action'] == 2)
	{
		DB::table('users')->where('UID', $_REQUEST['uid'])
					->delete();

		DB::table('users_pw')->where('UID', $_REQUEST['uid'])
					->delete();
	}
	
	//Debug
	// DB::table('users')->where('UID', $_REQUEST['uid'])
	// 				->update(array('name' => 'trojan', 
	// 								'email' => 'trojan@usc.edu', 
	// 								'join_date' => '2014-11-23', 
	// 								'last_active' => '2014-11-26'
	// 						));

	//DB::insert('insert into list_data (stock) values (?)', array("LC"));
	//var_dump($_POST);
});

//User edit -- Debug Only
Route::get('user_update', function()
{
	DB::table('users')->where('UID', 1)
					->update(array('name' => 'trojan', 
									'email' => 'trojan@usc.edu', 
									'join_date' => '2014-11-23', 
									'last_active' => '2014-11-26'
							));

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

Route::get('users', function()
{
    return View::make('layouts/users');
});

