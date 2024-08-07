<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Larabol Home Page</title>
    <style>
        /*Home page styling*/
        /*
body{
    background-color:#8fc7f4;
}
.nav{
    display: flex;
    justify-content: space-between;
    padding:0 30px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size:25px;
    font-weight:light;
    font-style:oblique;
}
nav ul li{
    list-style-type:none;
    display:inline;
    padding:0 5px;
}
      */
    </style>
</head>
<body>
            <nav>
                    <div><a href="/">Larabol</a></div>
                <ul class="form-fluid">
                    <li><a href="{{route('login')}}">Sign In</a></li>
                    <li><a href="{{route('post')}}">Post</a></li>
                    <li><a href="{{route('register')}}">Sign Up</a></li>
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                </ul>
            </nav>
</body>
</html>