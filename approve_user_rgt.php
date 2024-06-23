<?
require_once 'includes/includes.php';
if(empty($_SESSION["user_id"]))
{
	header('location:index.php');	
}
else
{
		$sql_update="UPDATE user_table SET authorization=1 WHERE user_id='".$_GET['userid']."'";
		$res=mysqli_query($db,$sql_update) or die(mysqli_error());
		if($res)
			header("location:profile_rgt.php");
		else
			echo "Record not updated";
}
?>
