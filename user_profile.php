<style>
body {
    text-align: -webkit-center;
}
form {
    display: inline-block;
	marigin-top:50px !important;
}
ul li{
	inline-style:none;
}
.user_update{
  color: white !important;
  text-decoration: none !important;
}

</style>

<?php
require_once 'includes/includes.php';
// echo $_SESSION['user_id'];exit;

	$query1="SELECT * FROM user_table WHERE user_id='".$_SESSION['user_id']."'";
	$res=mysqli_query($db,$query1) or die(mysqli_error());
	$row=mysqli_fetch_assoc($res);
	// echo "<pre>";print_r($row);exit;
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
		<?php
		if(!empty($row['profile_picture'])){
				$userimg = "uploads/".$row['profile_picture'];
			}
		else{
			$userimg = "uploads/img_avatar.png";
		}			
?>
<h2 style="text-align:center"></h2>

<div class="card">
  <img src="<?php echo $userimg;?>" alt="John" style="width:100%">
  <h1><?= $row['name'];?></h1>
  <p class="title"><?php
				if($row['role'] == 1)
					echo "User Role : Super admin";
				else if($row['role'] == 2)
					echo "User Role : Admin";
				else
				echo 'User Role : General User';?>
  </p>
  <p>Email : <?= $row['email'];?></p>
  <p>Mobile : <?= $row['mobile'];?></p>
  <p>Date of birth : <?= $row['date_of_birth'];?></p>
  <p>User Id : <?= $row['user_id'];?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button ><a class="user_update" href="update_record_rgt.php?userid=<?php echo $_SESSION['user_id'];?>">Update</a></button></p>
</div>

</body>
</html>

