@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="UTF-8">
        <title>Schedule Creation</title>
        <link rel="stylesheet" type="text/css" href="/css/tmp.css">
	</head>

	<body>
		<div id="wrapper">	
			<h1>Schedule Creation</h1>
			
			<h2>{{Auth::user()->email}}</h2>
			
			<hr>
			</br>
			</br>

			<form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div>
                    Major:
                    <input type="text" name="major" id="major" value="{{ old('major') }}">
                </div>

                <div>
                    Concentration:
                    <input type="text" name="concentration" id="concentration" value="{{ old('concentration') }}">
                </div>

                <div>
                    Sectors:
                    <input type="text" name="sectors" id="sectors" value="{{ old('sectors') }}">
                </div>

                <div>
                    Academic Year:
                    <input type="radio" name="class" value"Freshman"> Freshman<br>
                    <input type="radio" name="class" value"Sophomore"> Sophomore<br>
                    <input type="radio" name="class" value"Junior"> Junior<br>
                    <input type="radio" name="class" value"Senior"> Senior
                </div>

                <div>
                    Semester:
                    <input type="text" name="semester" id="semester" value="{{ old('semester') }}">
                </div>

                <div>
                    Credit hours:
                    <input type="text" name="chours" id="chours" value="{{ old('chours') }}">
                </div>

                <div>
                    Exp. Graduation Date:
                    <input type="text" name="grad" id="grad" value="{{ old('grad') }}">
                </div>

                <div>
                    <button type="nextpage" id="nextpage">Next Page</button>
                </div>
            </form>

		</div>

	</body>

</html>	

@stop        