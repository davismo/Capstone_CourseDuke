@extends('layouts.master')

@section('content')
	
<h1>My Schedule</h1>
<h2>{{Auth::user()->name}}</h2>

<hr>
</br>
</br>
</br>

<div class="schedContent">
	<h3>Fall</h3>

	<div class="fallSchedule" id="fallSchedule">
	    <div>
	        <textarea name="message1" rows="10" cols="50" readonly>
	            ISAT 101: Intro to ISAT 3 - 1 credits 
	            ISAT 113: Issues in Biotechnology - 3 credits
	            General Education Course
	            General Education Course
	        </textarea>
	    </div>
	</div>

	<h3>Spring</h3>

	<div class="springSchedule" id="springSchedule">
	    <div>
	        <textarea name="spring" rows="10" cols="50" readonly>
	            ISAT 101: Intro to ISAT 3 - 1 credits 
	            ISAT 113: Issues in Biotechnology - 3 credits
	            General Education Course
	            General Education Course
	        </textarea>
	    </div>
	</div>

	<h3>Summer</h3>

	<div class="summerSchedule" id="summerSchedule">
	    <div>
	        <textarea name="summer" rows="10" cols="50" readonly>
	          ...
	        </textarea>
	    </div>
	</div>

</div>

<br>

<div class="Backbutton">
	<button class="btn" onclick="goBack()">Go Back</button>

	<script>
		function goBack() {
		    window.history.back();
		}
	</script>
</div>


@endsection

