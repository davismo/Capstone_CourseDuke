<!-- resources/views/auth/login.blade.php -->

@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="/css/home.css">
    </head>

        <body>  
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
                    <input type="checkbox" name="remember" id="checkbox"> Remember Me
                </div>

                <div>
                    <button type="submit" id="submit">GO</button>
                </div>

            </form>

            <div id="footer">
                <a id="Register" href="http://localhost:8000/auth/register">Register</a>
               
                <a id="forgotpassword" href="#">Forgot Password?</a>

            </div>


        </body>   

</html>    

@stop