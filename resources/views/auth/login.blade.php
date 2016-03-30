<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')
@section('title','Login')

@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif      

    
    <head>
        <link rel="stylesheet" type="text/css" href="/css/home.css">
    </head>

        <body>
            <div class="container">  
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
                        Remember Me
                        <input type="checkbox" name="remember" id="checkbox"> 
                    </div>
                    <div>
                        <button type="submit" id="submit">GO</button>
                    </div>
                </form>
                
                <div class="login-bottom">
                    <a class="register" href="{{ url('/auth/register') }}">Register</a>
                    <a class="forgotpassword" href="#">Forgot Password?</a>
                </div>
            
            </div>
        </body>   

</html>    

@stop