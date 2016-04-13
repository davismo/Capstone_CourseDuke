<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Course Duke</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<!-- page-specific scripts -->
		@yield('head-scripts')
	</head>

	<body>


		<div class="page-container">
			<div class="header">
				<img class="header-logo" src="/images/CD-logo.png" alt="logo" style="width: 160px; height: 89px;">
				<h4 class="subheading"><i>"Course Scheduling and Advisement Application for James Madison University ISAT Students."</i></h4>
			</div>

			<div class="nav-bar">
				<ul class="nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li style="color: white;"><strong>|</strong></li>           
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li style="color: white;"><strong>|</strong></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>

					@if(auth()->guest())
                        @if(!Request::is('auth/login'))
                            <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        @endif
                        @if(!Request::is('auth/register'))
                            <li><a href="{{ url('/auth/register') }}">Register</a></li>
                        @endif
                    @else
                    	<div class="dropdown">
                    		<button class="dropbtn">{{ auth()->user()->username}}</button>
							<div class="dropdown-content">
						    	<a href="{{ url('/auth/logout') }}">Logout</a>
							</div>
						</div>
                    @endif
				</ul>
			</div>

			<div class="top-bar"></div>

			<div class="container">	
				@yield('content')
			</div>

			<div class="footer">
			@include('partials.footer')
			</div>	
		</div>	
		
	</body>

</html>