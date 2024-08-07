<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>single post</title>
    <style>
        .container{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <nav>
   
     <ul class="form-fluid">
       hello
     </ul>
    </nav>
    <div class="container">
     @if($post) 
     <div class="card">
     <h2 class=" card-title"> {{$post->title}} </h2>
     <img src="{{asset($post->photo)}}" alt="" style="width:40%">
     <p class="card-text">
        {{$post->content}}
     </p>
     </div>
    @else 
    <h4>No such post found </h4>
    @endif
    
    </div>
</body>
</html>