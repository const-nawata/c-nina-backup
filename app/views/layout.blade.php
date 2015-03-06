<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') — C-Nina</title>

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

	<link rel="stylesheet" href="/css/c-nina-main.css">

@yield('headExtra')
</head>
<body>

<div class="upper-page-line"></div>

<div class="header-page-line">
	<div class="container">
		<div class="jumbotron j-header">
		</div>
	</div>
</div>
<?php
//TODO: Change calls from goods and users controller to calls from index controller.
//	Remove a_tab parameter from methods.
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="btn-group btn-group-justified" aria-label="Header-buttons">
				<div class="btn-group" role="group">
					<a type="button" class="btn btn-default" href="/">Главная</a>
				</div>
				<div class="btn-group" role="group">
					<a type="button" class="btn btn-default" href="/goods/list">О нас</a>
				</div>
				<div class="btn-group" role="group">
					<a type="button" class="btn btn-default" href="/users/list">Контакты</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<ul class="nav navbar-right">
				<li><a href="#">Link</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="mainn_contt">
@yield('content')
</div>

<div id="footer">
	<div class="container">
		<div class="col-md-4">&copy; 2015 C-Nina</div>
	</div>
</div>

</body>

</html>