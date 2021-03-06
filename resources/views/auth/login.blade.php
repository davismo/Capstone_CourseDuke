<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')
@section('title','Login')

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

<h2>Login</h2>

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
    <div>
        Email:
        <input type="email" name="email" id="email" value="{{ old('email') }}" >
    </div>
    <div>
        Password:
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button class="btn" type="submit" id="submit">GO</button>
    </div>
</form>

<div class="login-bottom">
    <ul>
        <li><a class="register" href="{{ url('/auth/register') }}">Register</a></li>
        <li><a class="forgotpassword" href="#">Forgot Password?</a></li>
    </ul>    
</div>



@endsection