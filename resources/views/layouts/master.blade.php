<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Course Duke</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1 class="header-heading">CourseDuke</h1>
			</div>
			<div class="nav-bar">
				<ul class="nav">
					<li><a href="{{ url('/') }}">Home</a></li>           
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
				</ul>
				<ul class="nav nav-right">
					@if(auth()->guest())
                        @if(!Request::is('auth/login'))
                            <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        @endif
                        @if(!Request::is('auth/register'))
                            <li><a href="{{ url('/auth/register') }}">Register</a></li>
                        @endif
                    @else
                    	<div class="dropdown" style="float:right;">
						  <button class="dropbtn">{{ auth()->user()->name }}</button>
						  <div class="dropdown-content">
						    <a href="{{ url('/auth/logout') }}">Logout</a>
						  </div>
						</div>
                    @endif
				</ul>
			</div>
			<div class="content">	
				@yield('content')
			</div>	
		</div>	
		<div class="footer">
			@include('partials.footer')
		</div>
	</body>
</html>