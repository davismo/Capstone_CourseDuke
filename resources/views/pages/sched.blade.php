@extends('layouts.master')

@section('content')


<div id="wrapper">	
	<h1 class="heading">Schedule Creation</h1>
	<h2>{{Auth::user()->username}}</h2>
	
	<hr>
	</br>
	</br>

	<form method="POST" action="/auth/register" class="schedule-form">
        {!! csrf_field() !!}

        <h3>Academics</h3>

        <div>
            Major:
            <input type="text" name="major" id="major" value="ISAT">
        </div>

        <div>
            Sectors:
            <select name="sectors" id="sectors">
                <option value="biotechnology">Applied Biotechnology</option>
                <option value="energy">Energy</option>
                <option value="engineering">Engineering/Manufacturing</option>
                <option value="environment">Environment</option>
                <option value="ikm">Information and Knowledge Management</option>
                <option value="telecom">Telecommunications</option>
            </select>
        </div>

        <div>
            Concentration:
            <select name="concentration" id="concentration">
                <option value="biotechnology">Applied Biotechnology</option>
                <option value="energy">Energy</option>
                <option value="engineering">Engineering/Manufacturing</option>
                <option value="environment">Environment</option>
                <option value="ikm">Information and Knowledge Management</option>
                <option value="telecom">Telecommunications</option>
            </select>    
        </div>

        <div>
            Academic Year:
            <select name="academic-year" id="academic-year">
                <option value="freshman">Freshman</option>
                <option value="sophomore">Sophomore</option>
                <option value="junior">Junior</option>
                <option value="senior">Senior</option>
            </select>
        </div>

        <div>
            Semester:
            <select name="semester" id="semester">
                <option value="fall">Fall</option>
                <option value="spring">Spring</option>
                <option value="summer">Summer</option>
            </select>
        </div>

        <div>
            Current Credit hours:
            <input type="text" name="chours" id="chours" value="{{ old('chours') }}">
        </div>

        <div>
            Exp. Graduation Date:
            <input type="text" name="grad" id="grad" value="{{ old('grad') }}">
        </div>

            <br>    
        <h3>Previous Coursework</h3>

        <div id="selection" class="selection">
            <div class="list1">
                <textarea name="message1" rows="10" cols="30">
                    Test 1
                </textarea>
            </div>
            <div class="list2">
                <textarea name="message2" rows="10" cols="30">
                    Test 2
                </textarea>
            </div>
        </div>

        <hr>
        <h3>Preferences</h3>

        <div>
            Maximum Difficulty
            <select name="difficulty" id="difficulty">
                <option value="easy">Easy</option>
                <option value="moderate">Moderate</option>
                <option value="difficult">Difficult</option>
            </select>
        </div>

        <div>
            <button type="nextpage" id="nextpage"><a href="{{ url('/sched2') }}">Next Page</a></button>
        </div>
    </form>

    <div class="backbutton">
        <button onclick="goBack()">Go Back</button>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>

</div>


@endsection        