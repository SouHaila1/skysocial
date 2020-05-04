<?php
require('includes/header.php');

if(isset($_GET['profile_username'])){
    $username = $_GET['profile_username'];
    $user_details_query =  mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
    $user_array = mysqli_fetch_array($user_details_query);
}
?>
<link rel="stylesheet" href="assets/css/profile.css">

<!--Profile Body-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-profile-block">
                <div class="fb-profile-block-thumb cover-container"></div>
                <div class="profile-img">
                    <a href="#">
                        <img src="assets\images\profile_pics\defaults\head_carrot.png" alt="" title="">        
                    </a>
                </div>
                <div class="profile-name">
                    <h2><?php $username ?></h2>
                </div>
                
                <div class="fb-profile-block-menu">
                    <div class="block-menu">
                        <ul>
                            <li><a href="#timeline" onclick="timeline()">Timeline</a></li>
                            <li><a href="#friends" onclick="friends()">Friends</a></li>
                            <li><a href="#photos" onclick="photos()">Photos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<div class="container">
    <div id="timeline">
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
    <div id="friends">
        <h1>this is friends div</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
    </div>
    <div id="photos">
        <h1>this is photos div</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
    </div>
</div>




<script src="assets/js/profile.js"></script>
