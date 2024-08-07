<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Document</title>
    <style>
    body{
                background-color:#8fc7f4;
            }
    .container-fluid{
        margin:10px;
    }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="container">
           @if($posts)
           @foreach( $posts as $post) 
              <div class="card">
               <a href="/posts/{{$post->id}}">
                <img src="{{$post->photo}}" alt="" style="width:40%;"  class="card-img">
                <h2 class="card-title">{{$post->title}}</h2>
                <p> {{$post->content}} </p>
               </a>
              </div>
            @endforeach
            @else
            <div>
                <h2>No posts found</h2>
            </div>
            @endif
        </div>
    </div>
</body>
</html>