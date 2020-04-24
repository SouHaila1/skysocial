@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets/profileStyle.css')}}">
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
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" title="">        
                    </a>
                </div>
                <div class="profile-name">
                    <h2>Saad Jmari</h2>
                </div>
                
                <div class="fb-profile-block-menu">
                    <div class="block-menu">
                        <ul>
                            <li><a href="#">Timeline</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">Friends</a></li>
                            <li><a href="#">Photos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection