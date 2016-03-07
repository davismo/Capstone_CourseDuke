@extends('layouts.master')

@section('title','Contact')

@section('sidebar')
	@parent

	<p>This is appended to the master sidebar.</p>
@endsection

@section('content')

		<h1>Contact </h1>

		<h3>For more information...</h3>

		<p>
			email: test@test.com <br>
			phone: 555.555.5555
		</p>	

@endsection



