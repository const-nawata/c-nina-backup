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



<nav class="navbar navbar-default navbar-fixed-left">
	<div class="container tabs-container">

		<ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="#">Главная</a></li>
		  <li role="presentation"><a href="#">Товары</a></li>
		  <li role="presentation"><a href="#">Пользователи</a></li>
		</ul>

	</div>
</nav>









<?php /* ?>



				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Home</a>
					</li>

					<li>
						<a href="#">Link</a>
					</li>

					<li>
						<a href="#">Link</a>
					</li>
				</ul>




		<div class="navbar-header">


<div class="header-page-line">

</div>


        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header"></div>

                <div class="navbar-collapse collapse">



		@if (!Auth::check())
				    <form class="navbar-form navbar-right" role="form" action="{{ action('UsersController@postLogin') }}" method="post">
				        <a href="/users/login" class="btn btn-success">Залогиниться</a>
				        <a href="/users/register" class="btn btn-success">Регистрация</a>
				    </form>
		@else

					<div class="navbar-form navbar-left"><a href="/planets/add" class="btn btn-primary">Add planet </a></div>

				    <form class="navbar-form navbar-right" role="form" action="/users/logout">
				        <button class="btn btn-success">Выйти</button>
				    </form>

				    <ul class="nav navbar-nav navbar-right">
				        <li><a href="#"><strong>{{ Auth::user()->username }}</strong></a></li>
				    </ul>
		@endif




                </div><!--/.navbar-collapse -->
                	<a class="" href="/">C-Nina</a>

					<div class="jumbotron">
					    <div class="container">


					        <h1>Контейнер 764</h1>

					    </div>
					</div>




            </div>
        </div>


<?php */ ?>






@yield('content')

        <div id="footer">
            <div class="container">
                <div class="col-md-4">
                    &copy; 2015 C-Nina
                </div>
            </div>
        </div>

</body>
</html>