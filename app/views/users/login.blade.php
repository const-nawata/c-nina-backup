@extends('layouts.left_a')

@section('title')
{{ @trans('prompts.login') }}
@stop

@section('headExtra')
    {{ HTML::style('css/signin.css') }}
@stop

@section('content')

	@if (Session::has('alert'))
	<div class="alert alert-danger"><p>{{ Session::get('alert') }}</p></div>
    @endif

    <form class="form-signin" role="form" action="{{ action('UsersController@postLogin') }}" method="post">
		<h2 class="form-signin-heading">{{ @trans('prompts.your_login_data') }}</h2>

        <input type="text" class="form-control" placeholder="{{ @trans('prompts.username') }}" name="username" required autofocus />
        <input type="password" class="form-control" placeholder="{{ @trans('prompts.password') }}" name="password" required />
        <label class="checkbox">
            <input type="checkbox" name="remember" value="remember-me">{{ @trans('prompts.remember_me') }}
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ @trans('prompts.enter') }}</button>

        <a href="/password/remind">{{ @trans('prompts.password_forgotten') }}</a><br />
        <a href="/users/register">{{ @trans('prompts.registration') }}</a>

    </form>

@stop
