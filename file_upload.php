<form method="post" enctype="multipart/form-data"action=" ">
Name:<input type="text" name="name" id="name"><br/><br/>
Mobile:<input type="varchar" name="mobile"><br/><br/>
Email:<input type="varchar" name="email"><br/><br/>
Password:<input type="password" name="password"><br/><br/>
File:<input type="file" name="image"><br/><br/>
<input type="submit" name="register" value="register">
</form>
<?php
extract($_POST);
if(isset($register))
{
$file_tmp=$_FILES['image']['tmp_name'];
$file_name=$_FILES['image']['name'];
$file_size=$_FILES['image']['size'];	
$ext=strtolower(end(explode('.',$file_name)));
$allowed=array('jpg','png','jpeg','gif');
	if(!in_array($ext,$allowed))
	{	
		$err_message="Uploaded file is not allowed";
	}
	if($file_size>2000000)
	{
		$err_message="Uploaded file size should be less than or equal to 2mb only ";
	}
	if(empty($err_message))
	{
		 move_uploaded_file($file_tmp,"upload/.$file_name");
		 require_once "dbconnect.php";
		 require_once "validate_str.php";
		 $sql_ins="insert into user_table(name,mobile,email,password,image)values('".form_str($name)."','".form_str($mobile)."','".form_str($email)."','".form_str($password)."','".form_str($file_name)."')";
		$res=mysqli_query($sql_ins);
		if($res)
		{
			echo "image uploaded";			
		}
		else
		{
			echo "image not upload";
			
		}
	}
	else
	{
		$err_message;
	}
}
	?>