<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Course Duke</title>
		<link rel="stylesheet" type="text/css" href="/css/tmp.css">
	</head>
	<body>
		<!--
		<header>
			<nav>
				@include('partials.nav')
			</nav>
		</header>
		-->
		@section('sidebar')
			This is the Master sidebar.
		@show	

		<div class="container">
			@yield('content')
		</div>

		@include('partials.footer')
	</body>
</html>