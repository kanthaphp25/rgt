<style>
body {
    text-align: center;
}
form {
    display: inline-block;
}

</style>
<?php
require_once 'includes/includes.php';
extract($_POST);
	if(!empty($submit))
	{		
		$sql_get="SELECT * FROM user_table WHERE user_id='".$_SESSION['user_id']."'";
		$res=mysqli_query($db,$sql_get);
		$row=mysqli_fetch_assoc($res);
// echo "<pre>"; print_r($row);exit;
        if(md5($password) != $row['password'] )
        {
        echo "You entered an incorrect password";
        }
		else
		{
				if($newpassword=$confirmnewpassword)
				$sql=mysqli_query($db,"UPDATE user_table SET password='".md5($newpassword)."' where user_id='".$_SESSION['user_id']."'");
			if($sql)
			{
				header('location:profile_rgt.php');
			}
		   else
			{
				echo "Passwords do not match";
			}
		}	
	}


      ?>
<form method="post" action="" class="pb-modalreglog-form-reg">
	<div class="form-group">
		<div id="pb-modalreglog-progressbar"></div>
	</div>
	<div class="form-group">
		<label>Previous Password</label>
		<div class="input-group pb-modalreglog-input-group">
			<input type="password" name="password" >
		</div>
	</div>
	<div class="form-group">
		<label>New password</label>
		<div class="input-group pb-modalreglog-input-group">
			<input type="password" name="newpassword">
		</div>
	</div>
	<div class="form-group">
		<label>Confirm Password</label>
		<div class="input-group pb-modalreglog-input-group">
			<input type="password" name="confirmnewpassword">
		</div>
	</div>
	<div class="form-group ">
		<div class="input-group pb-modalreglog-input-group text-center" style="padding-left:70px;">
			<input type="submit" name="submit" value="submit" class="btn btn-success btn-md">
		</div>
	</div>
</form>
