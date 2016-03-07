<!-- resources/views/auth/login.blade.php -->

@extends('app')
@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif      

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="/css/home.css">
    </head>

        <body>
            <div id="logincontainer" class="logincontainer">  
                <h1>CourseDuke</h1>  
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