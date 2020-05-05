<?php 
include("includes/header.php");
require("includes/classes/User.php");

if(isset($_GET['profile_username'])) {
	$username = $_GET['profile_username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
	$user_array = mysqli_fetch_array($user_details_query);

	$num_friends = (substr_count($user_array['friend_array'], ",")) - 1;
}

if(isset($_POST['remove_friend'])) {
	$user = new User($con, $userLoggedIn);
	$user->removeFriend($username);
}

if(isset($_POST['add_friend'])) {
	$user = new User($con, $userLoggedIn);
	$user->sendRequest($username);
}
if(isset($_POST['respond_request'])) {
	header("Location: requests.php");
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
.danger{
	background-color: #e74c3c;
}
.warning{
	background-color: #f0ad4e;
}
.default{
	background-color: #bdc3c7;
}
.success{
	background-color: #2ecc71;
}
.info{
	background-color: #3498db;
}
.deep_blue{
	background-color: #0043f0;
}
.profile_left input[type="submit"] {
	width: 90%;
	height: 30px;
	border-radius: 5px;
	margin: 7px 0 0 7px;
	border: none;
	color: #fff;
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
		 <form action="<?php echo '$username'?>">
		<?php 
		$profile_user_obj = new User($con, $username); 
		if($profile_user_obj->isClosed()) {
			header("Location: user_closed.php");
		}

		$logged_in_user_obj = new User($con, $userLoggedIn); 

		if($userLoggedIn != $username) {

			if($logged_in_user_obj->isFriend($username)) {
				echo '<input type="submit" name="remove_friend" class="danger" value="Remove Friend"><br>';
			}
			else if ($logged_in_user_obj->didReceiveRequest($username)) {
				echo '<input type="submit" name="respond_request" class="warning" value="Respond to Request"><br>';
			}
			else if ($logged_in_user_obj->didSendRequest($username)) {
				echo '<input type="submit" name="" class="default" value="Request Sent"><br>';
			}
			else 
				echo '<input type="submit" name="add_friend" class="success" value="Add Friend"><br>';

		}

		?>
	</form>
	</div>
	<div class="main_column column">
		<?php echo $username ; ?>
	</div>
	
</div>
</body>
</html>