<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('head-scripts')
    <link rel="stylesheet" type="text/css" href="/css/home.css">
@endsection

@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif      


<h1 class="page-title">CourseDuke</h1>
 
<h2>Register</h2> 

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name:
        <input type="text" name="name" id="name" value="{{ old('name') }}">
    </div>

    <div>
        Username:
        <input type="text" name="username" id="username" value="{{ old('username') }}">
    </div>

    <div>
        Email:
        <input type="email" name="email" id="email" value="{{ old('email') }}">
    </div>

    <div>
        Password:
        <input type="password" name="password" id="password">
    </div>

    <div>
        Confirm Password:
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>

    <!--Create new form and separate academic info later-->

    <div>
        <button type="submit" id="submit">Register</button>
    </div>
</form>
       
@endsection