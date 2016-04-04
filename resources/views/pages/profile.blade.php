@extends('layouts.master')

@section('title','Profile')

@section('head-scripts')
	<link rel="stylesheet" type="text/css" href="/css/home.css" 
@endsection

@section('content')

<br>
<h1 class="page-title">Welcome</h1>
<h2>{{Auth::user()->username}}</h2>

<br>
<br>

<div class="content-list">
	<ul class="list">
		<li class="column-left"><a href="{{ url('/sched') }}">Schedule Creation</a></li>
		<li class="column-right"><a href="{{ url('/gpacalc') }}">GPA Calculator</a></li>
	</ul>
</div>

<br>
<br>
	



@endsection 
