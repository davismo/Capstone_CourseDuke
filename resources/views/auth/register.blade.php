<!-- resources/views/auth/register.blade.php -->
@extends('app')

@section('content')

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
                    UserName:
                    <input type="text" name="username" id="username" value="{{ old('username') }}">
                </div>

                <div>
                    First Name:
                    <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}">
                </div>

                <div>
                    Last Name:
                    <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}">
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
                    Academic Year:
                    <input type="radio" name="class" value"Freshman"> Freshman<br>
                    <input type="radio" name="class" value"Sophomore"> Sophomore<br>
                    <input type="radio" name="class" value"Junior"> Junior<br>
                    <input type="radio" name="class" value"Senior"> Senior
                </div>

                <div>
                    Major:
                    <input type="text" name="major" id="major" value="{{ old('major') }}">
                </div>

                <div>
                    Concentration:
                    <input type="text" name="concentration" id="concentration" value="{{ old('concentration') }}">
                </div>

                <div>
                    Credit hours:
                    <input type="text" name="chours" id="chours" value="{{ old('chours') }}">
                </div>

                <div>
                    Exp. Graduation Date:
                    <input type="text" name="grad" id="grad" value="{{ old('grad') }}">
                </div>

                <div>
                    <input type="checkbox" name="transfer" id="transfer"> Transfer?
                </div>

                <div>
                    <button type="submit" id="submit">Register</button>
                </div>
            </form>
        </body>
    </html>    
@stop