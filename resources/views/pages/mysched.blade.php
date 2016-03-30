@extends('layouts.master')

@section('content')

		<div id="content">	
			<h1>My Schedules</h1>
			
			<h2>{{Auth::user()->email}}</h2>
			
			<hr>
			</br>
			</br>
			</br>

			<div id='main-container'>
				 <div class='box' id='topleft'>
				 	<img src="/images/paper.png" alt="papers" style="width:50px;height:100px;">
				 </div>
				 <div class='box' id='topright'>
				 	<img src="/images/paper.png" alt="papers" style="width:50px;height:100px;">
				 </div>
				 <div class='box' id='bottomleft'>
				 	<img src="/images/paper.png" alt="papers" style="width:50px;height:100px;">
				 </div>
				 <div class='box' id='bottomright'>D</div>
			</div>

			<div class="Backbutton">
				<button onclick="goBack()">Go Back</button>

				<script>
					function goBack() {
					    window.history.back();
					}
				</script>
			</div>


		</div>
@endsection

