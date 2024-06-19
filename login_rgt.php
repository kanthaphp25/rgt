
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
where email='$email'
and role IN(1,2)
and password=md5('$password')
 or mobile='$email' 
 and role IN (1,2)
 and password=md5('$password')";
 // echo $sql_get;die;
$res=mysqli_query($db,$sql_get) or die(mysqli_error());
// $result  = mysqli_fetch_array($res);
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
<form method="post" action="">
Email or Mobile:<input type="varchar" name="email" ><br/><br/>
Password:<input type="password" name="password"><br/><br/>
<input type="submit" name="login" value="Login" width="5">
</form>