<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Miit.io</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}">
	<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Comfortaa:400,300,700') }}" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
<div id="wrapper">
	<nav id="startpagenavbar" class="navbar navbar-inverse" role="navigation">
        <div id="header" class="container">
            <div class="navbar-header">
                <a class="logo navbar-brand" href="{{ url('/') }}"><img class="logoicon" alt="logo" src="img/logoicon.png">Miit.io</a>
            </div>
          
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/register') }}">Register</a>
                </li>
                <li>
                    <a href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>

		<div id="startpageheaderinfo">
        	<p>Schedule meetings with minimal effort.</p>

        	<div id="startpagebtns">		
				<input class="btn btn-danger" type="button" value="Create new meeting">
				<input class="btn btn-success registerbtn" type="button" value="Register">
			</div>

			<a href="#" class="startpagequestionlink">
				<div class="circle">?</div>
			</a>
			<p class="learnmore">Learn more</p>
        </div>
		
{{-- 		<div id="startpagelogo">
        	<a class="logo" href="{{ url('/') }}"><img class="logoicon" alt="logo" src="img/logoicon.png"><br>Miit.io</a>
        </div> --}}
    </nav>
		@yield('content')
		
		<div class="container content">
			<div id="howitworks">
				<h3>How it works</h3>
				<p>Miit.io is very simple to use.</p>
				<p>With only a few steps you can schedule a meeting with your colleague</p>
			</div>
		</div>

		<div id="footer" class="container">
	
			<ul>
				<li><a href="#"> &copy; Miit.io</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
				<li><a href="{{ url('/contact') }}">Contact</a></li>
			</ul>
		
	</div>
</div>

</body>
</html>