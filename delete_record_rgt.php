<?php
session_start();
require_once 'includes/includes.php';
$sql_delete="DELETE from user_table WHERE user_id='".$_GET['userid']."' ";
$res=mysqli_query($db,$sql_delete) or die(mysqli_error());
if($res)
header("location:profile_rgt.php");
else
	echo "Record not deleted";
?>