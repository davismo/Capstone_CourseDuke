@extends('app')

@section('content')

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
                <select name="academic-year">
                    <option value="freshman">Freshman</option>
                    <option value="sophomore">Sophomore</option>
                    <option value="junior">Junior</option>
                    <option value="senior">Senior</option>
                </select>
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
                <button type="nextpage" id="nextpage"><a href="{{ url('/sched2') }}">Next Page</a></button>
            </div>
        </form>

        <div class="Backbutton">
            <button onclick="goBack()">Go Back</button>

            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>

	</div>

</body>

@endsection        