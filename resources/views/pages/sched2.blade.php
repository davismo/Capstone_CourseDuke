@extends('layouts.master')

@section('content')

	<?php
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("csv",$conn);

		if(isset($_POST['submit']))
		{
			$file = $_FILES['']['tmp_name'];

			echo $file; 
		}
	?>


	<body>

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
	</body>
@endsection