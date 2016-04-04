@extends('layouts.master')

@section('head-scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.0.9/themes/default/style.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.0.9/jstree.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){ 
	    //fill data to tree with AJAX call
	    $('#tree-container').jstree({
		'plugins': ["wholerow", "checkbox"],
	        'core' : {
	            'data' : {
	                "url" : "/course",
	                "dataType" : "json" // needed only if you do not supply JSON headers
	            }
	        }
	    }) 
	});
	</script>
@endsection

@section('content')

<h1 class="heading">Schedule Creation</h1>
	<h2>{{Auth::user()->username}}</h2>
	
	<hr>
	</br>
	</br>

<div id="tree-container"></div>

<br>

<form method="post" action="/sched2" enctype="multipart/form-data">
	<input type="file" name="file"/>
	<br />
	<input type="submit" name="submit" value="submit"/>
</form>	

<div class="Backbutton">
    <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</div>

@endsection