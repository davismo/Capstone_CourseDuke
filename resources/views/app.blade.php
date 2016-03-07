<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CourseDuke</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/tmp.css"> 
</head>

<body>
    <div id="wrapper">
        <div id="header">
            @include('partials.nav')
        </div>
        <div id="content">
            @section('sidebar')
                <div class="sidebar">
                </div> 
            @show    

            <div class="container">
                @yield('content')
            </div>    
        
            <!-- Scripts -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </div>
        <div id="footer">
            @include('partials.footer')
        </div>
    </div>    
</body>


</html>

