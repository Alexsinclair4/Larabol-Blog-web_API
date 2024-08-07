<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>sign Up Page</title>
    <style>
        .signup-box{
            width:500px;
            margin: 140px auto;
        }
    </style>
</head>
<body>
                <nav>
                        <div><a href="/">Larabol</a></div>
                    <ul class="form-fluid">
                        <li><a href="{{route('login')}}">Log In</a></li>
                    </ul>
                </nav>
</body>
    <div class="container-fluid">
        <div class="signup-box">
        <form action="{{route('register')}}" method="post">
            @if(session('success'))
            <span class="alert alert-success"> {{session('success')}} </span>
            @endif
            @if(session('error'))
            <span class="alert alert-danger"> {{session('error')}} </span>
            @endif
            @csrf 
            <div class="form-group">
                    <label for="">Firstname</label>
                    <input type="text" class="form-control" name="firstname">
                  @if($errors->has('firstname'))
                  <span class="text-danger"> {{$errors->first('firstname')}} </span>
                  @endif
            </div>
            <div class="form-group">
                    <label for="">Lastname</label>
                    <input type="text" class="form-control" name="lastname">
                    @if($errors->has('lastname'))
                  <span class="text-danger"> {{$errors->first('lastname')}} </span>
                  @endif
            </div>
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
            <button class="btn btn-lg btn-primary form-control">Register</button>
        </form>
        </div>
    </div>
</body>
</html>