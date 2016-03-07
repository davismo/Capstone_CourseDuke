@extends('app')

@section('title','Profile')

@section('content')
	<body>
		<div id="wrapper">
			<h1>Welcome</h1>
			
			<h2>{{Auth::user()->username}}</h2>

			<br>
			<br>

			<div class="btn">
				<div class="column-center">
					<a href="{{ url('/sched') }}">Schedule Creation</a>
				</div>
				<div class="column-left">
					<a href="{{ url('/mysched') }}">My Schedules</a>
				</div>
				<div class="column-right">
					<a href="{{ url('/tmp') }}">GPA Calculator</a>
				</div>
			</div>	
	
		</div>

	</body>

@endsection 
