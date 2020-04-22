<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>skysocial</title>

        
    </head>
      

    <body>
<!--navbar-->
       <nav class="navbar navbar-expand-lg navbar-light  " style="background:#87cefa ;">
            <a class="nav-link" href="#"> <img src="{{ URL::to('/assets/img/logo.png') }}" style="width:16rem; "> </a>
            <div class="form-inline mt-2 ml-auto">
               <form>
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Email</label>
                        <input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Enter your Email">
                        </div>
                        <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">password</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter your password">
                        </div>
                        </div>
                        <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Log In</button>
                        </div>
                    </div>
                </form> 
            </div>
          </nav> 
<!--End navbar-->
<!--form-->
          <center>
          <div class="mt-5" >
                <div class="card" style="width: 30rem; background:;" >
                    <div class="card-header">
                        <h2>Sign In</h2>
                      </div>
                    <div class="card-body">
                        <form action="/" method="POST">
                            @csrf
                            <div class="row">
                              <div class="form-group col-md-6">
                                <label for="inputtext1">First name :</label>
                                <input type="text" class="form-control @error('firstname')is-invalid @enderror" placeholder="First name" name="firstname" >
                              </div>
                              @error('firstname')
                              <div class="alert alert-danger"> {{$message}} </div>
                              @enderror
                              <div class="col">
                                <label for="inputtext2">Last name :</label>
                                <input type="text" class="form-control @error('lastname')is-invalid @enderror" placeholder="Last name" name="lastname">
                              </div>
                              @error('lastname')
                              <div class="alert alert-danger"> {{$message}} </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4">Email :</label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror" id="inputEmail4" placeholder="Enter your Email" name="email">
                              </div>
                              @error('email')
                              <div class="alert alert-danger"> {{$message}} </div>
                              @enderror
                              <div class="form-group">
                                <label for="inputEmail5">Confirm Email :</label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror" id="inputEmail5" placeholder="Confirm your Email" name="email">
                              </div>
                              @error('email')
                              <div class="alert alert-danger"> {{$message}} </div>
                              @enderror
                            
                                <div class="form-group ">
                                  <label for="inputPassword4">Password :</label>
                                  <input type="password" class="form-control @error('password')is-invalid @enderror" id="inputPassword4"   placeholder="Enter your Password" name="password">
                                </div>
                                @error('password')
                              <div class="alert alert-danger"> {{$message}} </div>
                              @enderror
                                <div class="form-group ">
                                    <label for="inputPassword5">Confirm Password :</label>
                                    <input type="password" class="form-control @error('password')is-invalid @enderror" id="inputPassword5"  placeholder="Confirm your Password" name="password">
                                  </div>
                                  @error('password')
                                    <div class="alert alert-danger"> {{$message}} </div>
                                  @enderror
                            </div>
                             
                              
                              <button type="submit" class="btn btn-primary">Sign in</button>
                       </form>
                    </div>
                  </div>
                </div>
          </div>
        </center>
<!--End form-->

          

        
    </body>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
