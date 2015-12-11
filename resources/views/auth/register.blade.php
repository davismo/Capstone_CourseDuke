<!-- resources/views/auth/register.blade.php -->
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
            <h1>Register</h1>  

            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div>
                    Name
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                </div>

                <div>
                    Email
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>

                <div>
                    Password
                    <input type="password" name="password" id="password">
                </div>

                <div>
                    Confirm Password
                    <input type="password" name="password_confirmation" id="password_confirmation">
                </div>

                <div>
                    <button type="submit" id="submit">Register</button>
                </div>
            </form>
        </body>
    </html>    
@stop