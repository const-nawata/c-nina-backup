@extends('layout')

@section('title')
Login
@stop

@section('headExtra')
    {{ HTML::style('css/signin.css') }}
@stop

@section('content')
<div class="container">

	@if (Session::has('alert'))
	<div class="alert alert-danger"><p>{{ Session::get('alert') }}</p></div>
    @endif

    <form class="form-signin" role="form" action="{{ action('UsersController@postLogin') }}" method="post">
		<h2 class="form-signin-heading">Your login data</h2>

<?php /* ?>
        <input type="text" class="form-control" placeholder="Email or username" name="username" required autofocus />
<?php */ ?>

        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus />
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        <label class="checkbox">
            <input type="checkbox" name="remember" value="remember-me">Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <a href="/password/remind">Password forgotten?</a><br />
        <a href="/users/register">Registration</a>

    </form>
</div>
@stop
