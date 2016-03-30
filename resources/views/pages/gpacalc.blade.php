@extends('layouts.master')

@section('title', 'GPA Calculator')

@section('content')



<h1 class="heading">GPA Calculator</h1>


<form method="POST" action="{{ url('/gpacalc') }}">
    {!! csrf_field() !!}

    <div>
        Current GPA <br>
        <input type="text" name="current-gpa" id="current-gpa" value="{{ old('current-gpa') }}">
    </div>

    <div>
        Current Credits Total <br>
        <input type="text" name="current-credits" id="current-credits" value="{{ old('current-credits') }}">
    </div>

    <div>
        Credit Hours <br>
        <input type="text" name="credit-hours" id="credit-hours" value="{{ old('credit-hours') }}">
    </div>

    <div>
        Grade (out of 4.0) <br>
        <input type="text" name="grade" id="grade" value="{{ old('grade') }}">
    </div>

    <div>
        Submit <br>
        <input type="submit" name="submit" id="submit" value="{{ old('submit') }}">
    </div>

</form>            


@endsection