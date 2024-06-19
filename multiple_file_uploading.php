<form method="post" enctype="multipart/form-data"action=" ">
Name:<input type="text" name="name" id="name"><br/><br/>
File:<input type="file" multiple="true" name="image[]"><br/><br/>
<input type="submit" name="upload" value="Upload">
</form>

<?php
extract($_POST);
if(isset($upload))
{
	require_once "dbconnect.php";
	require_once "validate_str.php";
	$sqlins="insert into user_table(name)values('".form_str($name)."')";
	$rest=mysqli_query($sqlins);	
	$count=count($_FILES['image']['name']);
	$fk=mysqli_insert_id();
	if($rest)
	{
		for($i=0;$i<$count;$i++)
		{
			$file_name=$_FILES['image']['name'][$i];
			$file_size=$_FILES['image']['size'][$i];
			$file_tmp=$_FILES['image']['tmp_name'][$i];	
			$ext=strtolower(end(explode('.',$file_name)));
			$filePath = "upload/".$file_name;
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
				if(move_uploaded_file($file_tmp,$filePath))
				{
					$sql_ins="insert into image_tbl(image_name,u_id)values('$file_name','$fk')";
					$res=mysqli_query($sql_ins);					
				}
			}
			else
			{
			$err_message;
			}
		}
		if($res)
		{
		echo "image uploaded";			
		}
		else
		{
		echo "image not upload";
		}
	}
}
	?>