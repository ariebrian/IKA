<html>
	<head>
		<title>Login Page</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	</head>
	<body class="bodybg">
			<div class ="topnav">
				<ul>
					<li style="float:left"><img src="{{ asset('icon/IKAMOCKUP.png') }}" class="logo"></li>
					<li><a class="active" href="#login">Login</a></li>
					<li><a href="#signup">Sign Up</a></li>
					<li><a href="#home">Home</a></li>
				</ul>
			</div>
		<div class="container" style="background-color:#ffce22; height: 100%;">
				
				<div class="login">
					<h1>Login</h1>
					<form>
						<label for="username" class="row">Username</label>
						<input type="text" id="usename" name="username" class="col-4">
						<label for="password" class="row">Password</label>
						<input type="text" id="password" name="password" class="col-4">
						<button type="submit" class="row col-sm-offset-2">Login</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>