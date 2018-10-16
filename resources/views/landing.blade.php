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
	<nav class="navbar navbar-expand-md navbar-dark topnav">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('icon/IKAMOCKUP.png') }}" class="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{ route('login') }}">Masuk</a></li>
					<li class="nav-item"><a href="{{ route('register') }}">Daftar</a></li>
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
		<div class = "row  text-center" style="margin:0px;">
			<div class = "col-md-4" style="padding:0px;"><div class="artikel">Artikel 1</div></div>
			<div class = "col-md-4" style="padding:0px;"><div class="artikel">Artikel 2</div></div>
			<div class = "col-md-4" style="padding:0px;"><div class="artikel">Artikel 3</div></div>
		</div>
		<div class="footer">
			<p>Copyright &copy Prodentic 2018 | Not for Public Use</p>
		</div>
	</main>
</body>
</html>
	