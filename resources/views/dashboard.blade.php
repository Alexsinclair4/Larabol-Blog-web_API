<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Dashboard</title>
    <style>
        /* Dashboard styling */
    body{
                background-color:#8fc7f4;
            }
    nav {
        display:flex;
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
    </style>
    </head>
    <body>
        <nav>
           <a href="/dashboard">Dashboard</a>
            <ul class="form-fluid">
                <li><a href="{{route('post-create')}}">Create Post</a></li>
                <li><a href="{{route('updatepassword')}}">Update Password</a></li>
                <li><a href="{{route('userupdate')}}">Update Profile</a></li>
            </ul>
        </nav>
        <h3>Welcome {{$firstname}}</h3>
</body>
</html>