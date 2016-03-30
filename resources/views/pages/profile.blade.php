@extends('layouts.master')

@section('title','Profile')

@section('content')

	<head>
        <link rel="stylesheet" type="text/css" href="/css/home.css">
    </head>

	<body>
		<div class="main">
			<h1 style="text-align: center;">Welcome</h1>
			
			<h2 style="text-align: center;">{{Auth::user()->username}}</h2>

			<br>
			<br>
			<br>
			<br>
			<div class="content-list">
				<ul class="list">
					<li class="column-center">
						<a href="{{ url('/sched') }}">Schedule Creation</a>
					</li>
					<li class="column-left">
						<a href="{{ url('/mysched') }}">My Schedules</a>
					</li>
					<li class="column-right">
						<a href="{{ url('/gpacalc') }}">GPA Calculator</a>
					</li>
				</ul>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>	
	
		</div>

	</body>

@endsection 
