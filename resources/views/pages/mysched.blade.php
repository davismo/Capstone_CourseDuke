@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="UTF-8">
        <title>My Schedules</title>
        <link rel="stylesheet" type="text/css" href="/css/tmp.css">
	</head>

	<body>
		<div id="wrapper">	
			<h1>My Schedules</h1>
			
			<h2>{{Auth::user()->email}}</h2>
			
			<hr>
			</br>
			</br>

			<img src="images/paper.png" alt="papers" style="width:200px;height:300px;">
			<img src="images/paper.png" alt="papers" style="width:200px;height:300px;">
			<img src="images/paper.png" alt="papers" style="width:200px;height:300px;">

		</div>

	</body>

</html>	

@stop