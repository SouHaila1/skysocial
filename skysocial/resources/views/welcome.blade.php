<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>SkySocial</title>
        <!--Font Awosome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
   <style>
     .image{
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
        width:38rem;
     }  
       #upload {
    opacity: 0;

        }
#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
   </style>
    </head>
    <body style="background:#fafafa; overflow-x: hidden;">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background:#87cefa ">
            <div class="container">
                <ul class="navbar-nav mr-auto">
                    <img src="{{ URL::to('/assets/img/logoWelcome.png') }}" style="width:15rem; ">  
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src=" {{asset(Auth::user()->avatar)}} " style="width:3rem; height:27px; border-radius:50%; margin-right:3px" alt="">
                         <span style="color:#fff">{{ Auth::user()->name }} </span> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                    
            </div>
        </nav> 
        
        
    <div class="row posts">
        <!--First div-->
        <div class="col">
            <div class="container" style="background:#fff; width: 16rem; margin-top:4rem; border-radius:.4rem">
            <img src=" {{asset(Auth::user()->avatar)}} " style="width: 16rem; height:15rem;  margin-left:-1rem; border-radius:.4rem" alt="">
            
            </div>   
            <div class="container" style="background:#fff; width: 16rem; margin-top:4rem; border-radius:.4rem">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 mt-3">
                      <a class="nav-link" href="/skysocial/skysocial/public/profile"> <i class="fas fa-user" style="font-size: 19px; color: #87cefa;"> &nbsp; &nbsp;&nbsp; &nbsp;{{ Auth::user()->name }}</i></a>
                    </li>
                    <li class="nav-item mb-2 ">
                      <a class="nav-link" href="/skysocial/skysocial/public/"><i class="fas fa-home" style="font-size: 19px; color: #87cefa;">&nbsp; &nbsp;&nbsp; &nbsp;Home</i></a>
                    </li>
                    <li class="nav-item mb-2 ">
                      <a class="nav-link" href="#"><i class="fas fa-users" style="font-size: 19px; color: #87cefa;">&nbsp; &nbsp;&nbsp; &nbsp;Friends</i></a>
                    </li>
                    <li class="nav-item mb-2 ">
                        <a class="nav-link" href="#"><i class="fas fa-image" style="font-size: 19px; color: #87cefa;">&nbsp; &nbsp;&nbsp; &nbsp;Photos</i></a>
                    </li>
                    <li class="nav-item mb-3 ">
                        <a class="nav-link" href="#"><i class="fas fa-pencil-alt" style="font-size: 19px; color: #87cefa;">&nbsp; &nbsp;&nbsp; &nbsp;Post</i></a>
                    </li>
                  </ul>
            </div>
             <div class="container" style="background:#fff; width: 16rem; margin-top:4rem; border-radius:.4rem">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 mt-3">
                        <a class="nav-link" href="/profile"> <i class="fas fa-cog" style="font-size: 19px; color: #87cefa;"> &nbsp; &nbsp;&nbsp; &nbsp;Settings</i></a>
                    </li>
                    <li class="nav-item mb-2 ">
                        <a class="nav-link" href="/"><i class="fas fa-user-friends" style="font-size: 19px; color: #87cefa;">&nbsp; &nbsp;&nbsp; &nbsp;Find Friends</i></a>
                    </li>
                </ul>   
             </div>
        </div>

        <!--Second div-->
        <div class="col">
            <div class="container" style=" width: 40rem; margin-top:4rem;"> 
                <form action="{{route('post')}}" method="POST" enctype="multipart/form-data">
            @csrf
                    <textarea class="form-control"  name="body" style="width:38rem; height:6rem; border:none; " placeholder="Write Post"></textarea>
                            <!-- Upload image input-->
                            <div class="input-group mb-3 px-2 py-2  bg-white shadow-sm image">
                                <input id="upload" name="image" type="file" onchange="readURL(this);" class="form-control border-0 ">
                                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                <div class="input-group-append">
                                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                </div>
                            </div>
                            <button type="submit" class="btn mb-4" style="background:#87cefa;color:#fff"> Create Post</button>
                    <input type="hidden" value=" {{ Session::token() }} " name="_token">
                </form>    
                @foreach ($posts as $post)
                    <div class="card post" style="width: 100%; margin-bottom:1.2rem; ">  
                            <div class="card-body">
                            <h5 class="card-title">  {{$post->user->name}}</h5>
                            <p class="card-text">{{ $post->body}}</p>
                            <p> <img src=" {{asset('uploads/images/'. $post->image)}} " style="height:30rem; width:100%;" alt="image"> </p>
                        <!-- <p>{{ $post->created_at}}</p>-->
                            <div class="interaction">
                                <a href="#" class="like" style="font-size: 19px; color: #87cefa; margin-right:3rem;">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'  }}</a> |
                                <a href="#" class="like" style="font-size: 19px; color: #87cefa; margin-right:3rem;">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'  }}</a>
                            </div>
                            <div>
                                @comments(['model' => $post])
                            </div>
                            </div>    
                    </div>
                @endforeach
            </div>
        </div>
        <!--Third div-->
        <div class="col">
            <div class="container" style="background:#fff; width: 15rem; margin-top:4rem; border-radius:.4rem">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active mb-2 mt-3"  >None of your friends is online
                        at the moment.</a>
                    </li>
                    
                  </ul>
            </div>
        </div>
       
    </div>


    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    var token = '{{ Session::token() }}';
    var urlLike = '{{ route('like') }}';
</script>
<script>
    /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>
</html>
