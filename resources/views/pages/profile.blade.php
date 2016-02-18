@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="UTF-8">
        <title>Profile</title>
        <link rel="stylesheet" type="text/css" href="/css/tmp.css">
	</head>

	<body>
		<div id="wrapper">
			<h1>Welcome</h1>
			
			<h2>{{Auth::user()->email}}</h2>

			<br>
			<br>

			<div class="btn">
				<div class="column-center"><a href="{{ url('/sched') }}">Schedule Creation</a></div>
				<div class="column-left"><a href="{{ url('/mysched') }}">My Schedules</a></div>
				<div class="column-right"><a href="{{ url('/gpacalc') }}">GPA Calculator</a></div>
			</div>	
	
		</div>

	</body>

</html>	

@stop        