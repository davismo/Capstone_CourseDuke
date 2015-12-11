<!-- resources/views/auth/login.blade.php -->

@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="/css/tmp.css">
    </head>

        <body>  
            <h1>Login</h1>  

            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <div>
                    Email
                    <input type="email" name="email" id="email" value="{{ old('email') }}" >
                </div>

                <div>
                    Password
                    <input type="password" name="password" id="password">
                </div>

                <div>
                    <input type="checkbox" name="remember" id="checkbox"> Remember Me
                </div>

                <div>
                    <button type="submit" id="submit">Login</button>
                </div>

            </form>

        </body>   

</html>    

@stop