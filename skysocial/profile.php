<?php 
include("includes/header.php");

if(isset($_GET['profile_username'])) {
	$username = $_GET['profile_username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
	$user_array = mysqli_fetch_array($user_details_query);

	$num_friends = (substr_count($user_array['friend_array'], ",")) - 1;
}
 ?>

<style type="text/css">
.profile_left {
	top: -10px;
	width: 17%;
	max-width: 240px;
	min-width: 130px;
	height: 100%;
	float: left;
	position: relative;
	background-color: #37B0E9;
	color: #CBEAF8;
	margin-right: 20px;
}
#profile_img {
	min-width: 80px;
	width: 55%;
	margin: 20px;
	border: 5px solid #83D6FE;
	border-radius: 100px;
}
.profile_info {
	display: list-item;
	background-color: #2980B9;
	width: 100%;
	padding: 10px 0 10px 0;
}
.profile_info p {
	margin: 0 0 0 20px;
	word-wrap: break;
}
.wrapper {
	margin-left: 0px;
	top: 30px;
	padding-left: 0px;
}
</style>
	 

<div class="wrapper">
 	<div class="profile_left">
 		<img src="<?php echo $user_array['profile_pic']; ?>" id="profile_img">

 		<div class="profile_info">
 			<p><?php echo "Posts: " . $user_array['num_posts']; ?></p>
 			<p><?php echo "Likes: " . $user_array['num_likes']; ?></p>
 			<p><?php echo "Friends: " . $num_friends ?></p>
 		</div>
	</div>
	<form action="<?php echo '$username'?>">
		<?php 
		$profile_user_obj = new User($con, $username);
	
	</form>
</div>
</body>
</html>