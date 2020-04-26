@extends('layouts.app')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/profileStyle.css')}}">
<!-- profile picture-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-profile-block">
                <div class="fb-profile-block-thumb cover-container">
                    <div class="float-right">
                        <a href="" class="btn btn-secondary">Ajouter</a>
                        <a href="" class="btn btn-secondary">Message</a>
                    </div>
                </div>
                <div class="profile-img">
                    <a href="#">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png">        
                    </a>
                </div>
                <div class="profile-name">
                    <h2>Saad</h2>
                </div>
                
                <div class="fb-profile-block-menu">
                    <div class="block-menu">
                        <ul>
                            <li><a href="#">Timeline</a></li>
                            <li><a href="#">Friends</a></li>
                            <li><a href="#">Photos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<!--- \\\\\\\Post-->
<div class="container">
    <div class="card gedf-card" >
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                        a publication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                    <div class="form-group">
                        <label class="sr-only" for="message">post</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload image</label>
                        </div>
                    </div>
                    <div class="py-4"></div>
                </div>
            </div>
            <div class="btn-toolbar justify-content-between">
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">share</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post /////-->

@endsection