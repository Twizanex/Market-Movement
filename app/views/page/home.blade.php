@extends('layouts.default')

@section('title')
	Home
@stop

@section('subtitle')
	Welcome Home!
@stop


@section('content')
	i am the home page
	<?php
	$users = DB::table('user')->get();

	foreach ($users as $user)
	{
	    var_dump($user->name);
	}
	?>
@stop

