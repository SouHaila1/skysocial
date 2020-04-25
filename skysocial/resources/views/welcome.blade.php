<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>SkySocial</title>

        
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background:#87cefa">
            <div class="container">
                <ul class="navbar-nav mr-auto">
                    <img src="{{ URL::to('/assets/img/logoWelcome.png') }}" style="width:15rem; ">  
                </ul>
                <ul class="navbar-nav ml-auto">
                    <div class="">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                   <!-- <a href="{{ url('/home') }}">Home</a>-->
                                @else
                                    <a href="{{ route('login') }}" style="color:#fff; font-weight:bold; margin-right:13px ; text-decoration:none">Log In</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" style="color:#fff; border:2px solid;  padding:3px 6px ;font-weight:bold ; text-decoration:none">Sign Up</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </ul>
                    
            </div>
        </nav>    

        <div class="container" style="background:#fafafa; height:100rem; width: 50rem; margin-top:7rem;">
            @foreach ($posts as $post)
            <div class="card" style="width: 100%; margin-bottom:3rem; ">  
                    <div class="card-body">
                    <h5 class="card-title"> Posted By {{$post->user->name}}</h5>
                    <p class="card-text">{{ $post->body}}</p>
                    <p> <img src=" {{asset('uploads/images/'. $post->image)}} " style="height:30rem; width:100%;" alt="image"> </p>
                    <p>{{ $post->created_at}}</p>
                    
                    </div>
                   
            </div>
            @endforeach
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
