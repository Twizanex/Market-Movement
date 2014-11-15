@extends('layouts.default')

@section('title')
	Home
@stop

@section('subtitle')
	Welcome Home!
@stop


@section('content')
<div class="row">
	<div class="col-md-12">

	i am the home page
	<?php
	$users = DB::table('user')->get();

	foreach ($users as $user)
	{
	    var_dump($user->name);
	}
	?>
	</div>
</div>
@stop

