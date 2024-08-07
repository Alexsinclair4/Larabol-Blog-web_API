<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Post page</title>
    <style>
      .container-fluid{
        width: 500px;
        margin:140px auto;
      }
   </style>
</head>
<body>
    <nav>
    <a href="{{route('dashboard')}}">Dashboard</a>
        <ul class="form-fluid">
            <li><a href="{{route('updatepassword')}}">Update Password</a></li>
            <li><a href="{{route('userupdate')}}">Update User</a></li>
        </ul>
    </nav> 
        <div class="container-fluid">
        @if(session('error'))
            <span class="alert alert-danger"> {{session('error')}} </span>
            @endif
            @if(session('success'))
            <span class="alert alert-success"> {{session('success')}} </span>
            @endif
            <form action="{{route('post-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title">
                @if($errors->has('title'))
                  <span class="text-danger"> {{$errors->first('title')}} </span>
                @endif
               </div>
               <div class="form-group">
                <label for="">photo</label>
                <input type="file" class="form-control" name="photo">
                @if($errors->has('photo'))
                  <span class="text-danger"> {{$errors->first('photo')}} </span>
                @endif
               </div>
               <input type="hidden" name="user" value="{{$user_id}}">
               <div class="form-group">
                <label for="">category</label>
                <select name="category" class="form-control">
                    <option value="">--Select category--</option>
                    @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->category}}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                  <span class="text-danger"> {{$errors->first('category')}} </span>
                @endif
               </div>
               <div class="form-group">
                <label for="">content</label>
                <textarea name="content" id="" cols="10" rows="4" class="form-control" ></textarea>
                @if($errors->has('content'))
                  <span class="text-danger"> {{$errors->first('content')}} </span>
                @endif
               </div>
               <button class=" btn btn-lg bg-primary form-control" >submit</button>
            </form>
        </div>
</body>
</html>