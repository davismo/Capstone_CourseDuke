@extends('layouts.master')

@section('head-scripts')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.0.9/themes/default/style.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.0.9/jstree.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){ 
    //fill data to tree with AJAX call
    $('#tree-container').jstree({
	'plugins': ["wholerow"],
        'core' : {
            'data' : {
                "url" : "/course",
                "dataType" : "json" 
            }
        }
    }) 
});
</script>

<script type="text/javascript">
	function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>

<style>
#dropbox {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
</style>

@endsection

@section('content')

<h1 class="heading">Schedule Creation</h1>
	<h2>{{Auth::user()->username}}</h2>
	
	<hr>
	</br>
<h3>Previous Coursework</h3>

<div id="tree-container" draggable="true" ondragstart="drag(event)"></div>

<br>

<p>Drag Previous ISAT Classes taken into the rectangle below:</p>

<div class="dropbox" id="dropbox" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>

<div class="nextpage">
    <button type="submit" class="btn"><a href="{{ url('/mysched') }}">GO!</a></button>
</div>

<div class="Backbutton">
    <button class="btn" onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</div>

@endsection