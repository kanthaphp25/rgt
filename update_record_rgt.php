<style>
body {
    text-align: -webkit-center;
}
form {
    display: inline-block;
	marigin-top:50px !important;
}

</style>

<?php
require_once 'includes/includes.php';
extract($_POST);
if(empty($_SESSION["user_id"]))
{
	header('location:index.php');	
}
else
{
	if(isset($user_update))
	{
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
			$file_name = $preimage;
		}
		$sql_update="UPDATE user_table SET 
		name = '".form_str($name)."',
		mobile = '".form_str($mobile)."',
		email = '".form_str($email)."',
		role = '".form_str($role)."',
		address = '".form_str($address)."',
		date_of_birth = '".form_str($dob)."',
		profile_picture = '".form_str($file_name)."'
		WHERE user_id='".$_GET['userid']."' ";
		$res=mysqli_query($db,$sql_update) or die(mysqli_error());
		if($res)
		header("location:profile_rgt.php");
		else
			echo "Record not updated";
	}
}
	
	 $query="SELECT * FROM user_table WHERE user_id='".$_GET['userid']."'";
	 $result=mysqli_query($db,$query) or die(mysqli_error());
		//echo "<pre>";print_r($row);exit;
		while($row=mysqli_fetch_assoc($result))
		{
?>
	<form method="post" action="" enctype="multipart/form-data" class="pb-modalreglog-form-reg">
		<div class="form-group">
			<label>User name</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>" placeholder="User name">
			</div>
		</div>
		<div class="form-group">
			<label>Mobile number</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile'];?>"  placeholder="Mobile number">
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email address</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label >Date of birth</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="date" name="dob" class="form-control" value="<?php echo date('Y-m-d',strtotime($row['date_of_birth']));?>" placeholder="Date of birth">
			</div>
		</div>
		<div class="form-group">
			<label >Role</label>
			<div class="input-group pb-modalreglog-input-group">

		<select name="role" class="form-control">
		<option value="1">Super admin</option>
		<option value="2">Admin</option>
		<option value="3">User</option>
		</select>
			</div>
		</div>
		<div class="form-group">
			<label>Address</label>
			<div class="input-group pb-modalreglog-input-group">
				<textarea  name="address" rows="4" cols="50">
				<?php echo $row['address'];?>
				</textarea>                                
			</div>
		</div>
		<div class="form-group">
			<label >Image</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="file" name="user_image" class="form-control" placeholder="profile picture">
			</div>
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-md btn-success" name="user_update" placeholder="Submit">
		</div>
	</form>
<?php
		}
?>
