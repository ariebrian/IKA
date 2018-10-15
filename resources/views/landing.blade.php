<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Welcome Page :: {{ config('app.name') }} </title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Styles -->
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body class="bodybg">
	<nav class="navbar navbar-expand-md navbar-dark p-0 topnav ">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('icon/IKAMOCKUP.png') }}" class="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="active" href="#">Home</a></li>
					<li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
					<li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<main>
		<div class="container">
			<div class="row col-md-12">
				<div class="home">
					<h1>Selamat Datang Akang & Teteh</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div id="article-menu" class="row text-center" style="margin:0px;">
			<div class="col-md-4 p-0 center-cropped" style="background-image: url('{{ asset('img/dummy1.jpg')}}')">
				<a href="#"><div class="article-item"> Artikel 1</div></a> 
			</div>
			<div class="col-md-4 p-0 center-cropped" style="background-image: url('{{ asset('img/dummy2.jpg')}}')">
				<a href="#"><div class="article-item"> Artikel 2</div></a> 
			</div>
			<div class="col-md-4 p-0 center-cropped" style="background-image: url('{{ asset('img/dummy3.jpg')}}')">
				<a href="#"><div class="article-item"> Artikel 3</div></a> 
			</div>
		</div>
	</main>
</body>
</html>
	