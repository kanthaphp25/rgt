<?php
require_once 'includes/includes.php';
extract($_POST);
define ('SITE_ROOT', realpath(dirname(__FILE__)));

//echo SITE_ROOT;exit;
if(isset($add_user_submit)){
	$user_role = $role;
	$sql_get="SELECT email,mobile FROM user_table WHERE user_id='".$_SESSION['user_id']."'";
}
else if(!empty($register)){
	$user_role = 0;
	$sql_get="SELECT * FROM user_table WHERE mobile='".$mobile."' or email='".$email."'";
	}
	
	if(!empty($_FILES['user_image']['name']))
	{
		$file_tmp=$_FILES['user_image']['tmp_name'];
		$file_name=$_FILES['user_image']['name'];
		$file_size=$_FILES['user_image']['size'];
		$file_ext = explode('.',$file_name);		
		$ext=strtolower(end($file_ext));
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
				 move_uploaded_file($file_tmp,SITE_ROOT.'\upload'.$file_name);
			}
	}
	else
	{
		$file_name = '';
	}
	
			$res=mysqli_query($db,$sql_get);
			$row=mysqli_fetch_assoc($res);
			if($email!=$row['email'] && $mobile!=$row['mobile'])
			{
				$sql_post="insert into user_table(
				name,
				mobile,
				email,
				password,
				role,
				address,
				date_of_birth,
				profile_picture)values(
				'".form_str($name)."',
				'".form_str($mobile)."',
				'".form_str($email)."',
				'".form_str($password)."',
				'".form_str($user_role)."',
				'".form_str($address)."',
				'".form_str($dob)."',
				'".form_str($file_name)."'
				)";
				$mqr=mysqli_query($db,$sql_post) or die(mysqli_error());
				if($mqr)
					header('location:profile_rgt.php');
				else
					echo "Account creation failed";
			}
			else
			{
				echo "<h1 style='color:red;'>Email or Mobile already existed</h1>";
				//header('location:'.$_SERVER['HTTP_REFERER'].'?user=existed_user');
			}
		
	
?>
