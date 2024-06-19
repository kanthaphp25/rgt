<?php
$obj=file_get_contents("php://input");
$user=json_decode($obj);
$userid=$user->user_id;
require_once "dbconnect.php";
require_once "validate_str.php";
$sqlread="select * from user_table where user_id=$userid";
$rest=mysqli_query($sqlread) or die(mysqli_error());
$count=mysqli_num_rows($rest);
$row=mysqli_fetch_assoc($rest);
$response=array();
if($count>0)
{
	
	while($row=mysqli_fetch_assoc($rest))
	{
	$records[]=$row;
	}
	$response['code']=200;
	$response['message']=$count."records found";
	$response['result']=$records;
}
else
{
$response['code']=204;
$response['message']="records not found in the database";
}
echo json_encode($response);
?>