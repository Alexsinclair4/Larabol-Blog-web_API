<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>sign Up Page</title>
    <style>
        .form-box{
            width:500px;
            margin: 140px auto;
        }
    </style>
</head>
<body>

                <nav>
                        <div><a href="/updatepassword">Larabol</a></div>
                    <ul class="form-fluid">
                        <li><a href="{{route('login')}}">Log In</a></li>
                    </ul>
                </nav>
    <div class="container-fluid">
        <div class="form-box">
        <form action="{{route('updatepassword')}}" method="post">
        @if(session('success'))
            <span class="alert alert-success"> {{session('success')}} </span>
            @endif
            @if(session('error'))
            <span class="alert alert-danger"> {{session('error')}} </span>
            @endif
            @csrf
            <div class="form-group">
                    <label for="">Old Password</label>
                    <input type="password" class="form-control" name="old_password">
                    @if($errors->has('old_password'))
                  <span class="text-danger"> {{$errors->first('old_password')}} </span>
                  @endif
            </div>
            <div class="form-group">
                    <label for="">New Password</label>
                    <input type="password" class="form-control" name="new_password">
                    @if($errors->has('new_password'))
                  <span class="text-danger"> {{$errors->first('new_password')}} </span>
                  @endif
            </div>
            <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password">
                    @if($errors->has('confirm_password'))
                  <span class="text-danger"> {{$errors->first('confirm_password')}} </span>
                  @endif
            </div>
            <button class="btn btn-lg btn-primary form-control">Update</button>
        </form>
        </div>
    </div>
</body>
</html>