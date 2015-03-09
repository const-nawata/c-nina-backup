<?php
//	No possibibly to do it in root controller (MainController)
$path	=  Request::path();
$path	=  $path != '/' ? "/".$path."/" : $path;
?>
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') — {{ @trans('prompts.brand') }}</title>

	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta name="keywords" content="магазин,контейтер,764,Нина,калиновский,базар,черновцы,чернівці">
	<meta name="description" content="Контейнер 764. Продажа тапочек оптом и в розницу.">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery & jQuery UI -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>

	<!-- Bootstrap -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="/js/c-nina.js"></script>
	<link rel="stylesheet" href="/css/c-nina-main.css">

@yield('headExtra')
</head>
<body>

<div class="upper-page-line"></div>

<div class="header-page-line">
	<div class="container">
		<div class="jumbotron j-header">
@if (Auth::check())
			<div>{{ @trans('prompts.welcome') }} <span class="user-welcome">{{{ Auth::user()->name }}} {{{ Auth::user()->surname }}}</span></div>
@endif
		</div>
	</div>
</div>


<nav class="navbar navbar-default">
	<div class="container">
		<div class="row">

			<div class="col-sm-6">
				<div class="btn-group btn-group-justified" aria-label="Header-buttons" role="group">
					<div class="btn-group" role="group">
						<a type="button" class="btn btn-default" href="/">{{ @trans('prompts.home') }}</a>
					</div>
					<div class="btn-group" role="group">
						<a type="button" class="btn btn-default" href="/index/about">{{ @trans('prompts.about_us') }}</a>
					</div>
					<div class="btn-group" role="group">
						<a type="button" class="btn btn-default" href="/index/contacts">{{ @trans('prompts.contacts') }}</a>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<ul class="nav navbar-nav navbar-right">
@if (!Auth::check())
					<li><a href="/users/login">{{ @trans('prompts.login') }}</a></li>
@else
					<li><a href="/users/logout">{{ @trans('prompts.logout') }}</a></li>
@endif
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ @trans('prompts.lang') }}<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ @$path }}?lang=en">{{ @trans('prompts.english') }}</a></li>
							<li><a href="{{ @$path }}?lang=ru">{{ @trans('prompts.russian') }}</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	</div>
</nav>

<div id="mainn_contt">
@yield('content')
</div>

<div id="footer">
	<div class="container">
		<div class="col-md-4">&copy; 2015 {{ @trans('prompts.brand') }}</div>
	</div>
</div>

</body>

</html>