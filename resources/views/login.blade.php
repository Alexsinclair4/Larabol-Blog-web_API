<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
        .form-box{
            width:500px;
            margin: 140px auto;
        }
    </style>
    <title>login Page</title>
    <style>
        body{
            background-color:#8fc7f4;
        }
        nav{
            display:flex;
            justify-content:space-between;
            font-size:25px;
            font-weight:light;
            font-style:oblique;
        }
        nav ul li{
            list-style-type:none;
            display:inline;
            padding:0 5px;
        }
        h1{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size:25px;
        font-weight:light;
        font-style:oblique;
        text-align:center;
        }
    </style>
</head>
<body>
     <h1>Sign In</h1>
        <nav class="container-fluid">
             <div><a href="/">Home</a></div>
            <ul class="form-fluid">
              <li><a href="{{route('register')}}">Register</a></li>
            </ul>
        </nav>
    <div class="container">
        <div class="form-box">
            @if(session('error'))
            <span class="alert alert-danger"> {{session('error')}} </span>
            @endif
        <form action="{{route('login')}}" method="post">
            @csrf
        <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
                @if($errors->has('email'))
                  <span class="text-danger"> {{$errors->first('email')}} </span>
                @endif
        </div>
        <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
                @if($errors->has('password'))
                  <span class="text-danger"> {{$errors->first('password')}} </span>
                @endif
        </div>
        <button class="btn btn-lg btn-primary form-control">Login</button>
        </form>
        </div>
    </div>
</body>
</html>