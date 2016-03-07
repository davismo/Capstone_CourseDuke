<!-- resources/views/auth/register.blade.php -->
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
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="/css/tmp.css">
    </head>

        <body>  
            <h1>Register</h1>  

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
                    Major:
                    <input type="text" name="major" id="major" value="{{ old('major') }}">
                </div>

                <div>
                    <button type="submit" id="submit">Register</button>
                </div>
            </form>
        </body>
    </html>    
@stop