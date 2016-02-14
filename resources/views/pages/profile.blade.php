@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="/css/tmp.css">
	</head>

	<body>
		<h1>Welcome</h1>
		
		<h2>{{Auth::user()->email}}</h2>
		
		<hr>
		</br>
		</br>

		<div class="container">
			<div class="column-center">My Schedules</div>
			<div class="column-left">Schedule Creation</div>
			<div class="column-right">Gpa Calculator</div>
		</div>	

	</body>

</html>	

@stop        