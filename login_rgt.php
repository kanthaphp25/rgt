
<?php
//echo md5('Reddy@225');exit;
extract($_POST);

//echo '<pre>';print_r($_POST);die;
// $host = "127.0.0.1";
// $username = "root";
// $connection1 = mysqli_connect($host, $username, '', "rgt");
if(isset($login))
{
	//echo  E_DEPRECATED; die;
require_once 'includes/dbconnect_rgt.php';
$sql_get="SELECT * FROM user_table 
where email='$email' and role IN(1,2) and password=md5('$password')
or mobile='$email' and role IN (1,2) and password=md5('$password')
or email='$email' and authorization = 1 and password=md5('$password')
or mobile='$email' and authorization = 1 and password=md5('$password')";
 // echo $sql_get;die;
$res=mysqli_query($db,$sql_get) or die(mysqli_error());
// echo $res;exit;
// $result  = mysqli_fetch_array($res);
// echo $res->debugDumpParams();exit;
// echo "<pre>";print_r($result);exit;
$countr=mysqli_num_rows($res);
if($countr==1)
{
$row=mysqli_fetch_assoc($res);
session_start();
$_SESSION['user_id']=$row['user_id'];
$_SESSION['name']=$row['name'];	
$_SESSION['role'] = $row['role'];	
$id=$row['user_id'];
// echo $id;die;
setcookie('user_id',$id,time()+200);
header('location:profile_rgt.php');
}
else
	echo "login failed";
}
?>

<?php// echo md5('Test@123');exit;?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
h1 p{color:white;background-color:green;}
body {
    text-align: -webkit-center;
}
form {
    display: inline-block;
	marigin-top:50px !important;
}
.login{marigin-left:70px !important; }

</style>

</head>
<body> 
<div class="container text-center">
<h1><p> WELCOME TO RGT</p></h1>
<form method="post" action="" class="pb-modalreglog-form-reg">
	<div class="form-group">
		<label> Email or Mobiel</label>
		<div class="input-group pb-modalreglog-input-group">
			<input type="text" class="form-control" name="email">
		</div>
	</div>
	<div class="form-group">
		<label> Password</label>
		<div class="input-group pb-modalreglog-input-group">
			<input type="password" class="form-control" name="password">
		</div>
	</div>
	<div class="form-group ">
		<div class="input-group pb-modalreglog-input-group text-center" >
			<input  type="submit" name="login" value="login" class="btn btn-success btn-md login">
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="register.php" id="reg">Get signup...?</a>
		</div>
	</div>
</form>
  </div>
</body>
</html>
