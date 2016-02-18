@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="UTF-8">
        <title>GPA Calculator</title>
        <link rel="stylesheet" type="text/css" href="/css/tmp.css">
	</head>

	<body>
		<div id="wrapper">	
			<h1>GPA Calculator</h1>
			
			<h2>{{Auth::user()->email}}</h2>
			
			<hr>
			</br>
			</br>

		</div>

	</body>

</html>	

@stop