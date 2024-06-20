<?php require_once 'includes/includes.php'; ?>
<html>
<head>
<style>
th, td {padding:10px !important;}
tr a{display: block;text-align: center;text-decoration: none;}


table {
	marigin-top:20px !important;
}
</style>
</head>
<body> 
<table border="1" >
<th>User_ID</th>
<th>NAME</th>
<th>MOBILE</th>
<th>EMAIL</th>
<th>Role</th>
<th>Address</th>
<th>Date of birth</th>
<th>Profile picture</th>
<?php 
if($_SESSION['role'] !=3 && $_SESSION['role'] !=0){
?>
<th>Modifiers</th>
<?php
}
//echo phpinfo();die;
if(empty($_SESSION['user_id']))
{
	header('location:index.php');
}
else
{
$sql_get="SELECT * FROM user_table";
$resultset=mysqli_query($db,$sql_get) or die(mysqli_error());
$countr=mysqli_num_rows($resultset);
	if($countr>0)
	{
		$i=1;	
		while($row=mysqli_fetch_assoc($resultset))
		{
			?>
			<tr>
			<td><?php echo $row['user_id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php
				if($row['role'] == 1)
					echo "Super admin";
				else if($row['role'] == 2)
					echo "Admin";
				else
				echo 'User';?>
			</td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo date('d-M-Y',strtotime($row['address']));?></td>
		<?php
		if(!empty($row['profile_picture'])){
		?>
			<td><img src="uploads/<?php echo $row['profile_picture'];?>" alt="Girl in a jacket" width="100" height="100"></td>
<?php
		}
		else{
			?>
			<td><img src="uploads/img_avatar.png" alt="Girl in a jacket" width="100" height="100"></td>
		<?php
		
		}			
		
					if($_SESSION['role'] !=3 && $_SESSION['role'] !=0){

?>
			<td>
				<button><a href="delete_record_rgt.php?userid=<?php echo $row['user_id'];?>">Delete</a></button>
				<?php if($_SESSION['role'] != 2 & $_SESSION['role'] != 3){	
				?>
				<button><a href="update_record_rgt.php?userid=<?php echo $row['user_id'];?>">Update</a></button>
				<?php 
				}
				else if($_SESSION['role'] == 3)
				{
					?>
				<button><a href="update_record_rgt.php?userid=<?php echo $row['user_id'];?>">Update</a></button>
					<?php
				}
				if($row['role'] != 1 & $row['role'] != 2 & $row['authorization'] == 0){	
				?>
					<button><a href="approve_user_rgt.php?userid=<?php echo $row['user_id'];?>">Approve</a></button>
			</td>
			<?php
					}
				}
			?>
			</tr>
			<?php
			
		}
	}
	else
	{
		?>
		<tr><td style="color:red" colspan="6" align="center">Records not found in database</td></tr>
		<?php
	}
}
?>

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create New User</h4>
        </div>
        <div class="modal-body">
                            <form method="post" action="/rgt/register_rgt.php" enctype="multipart/form-data" class="pb-modalreglog-form-reg">
                                <div class="form-group">
                                    <div id="pb-modalreglog-progressbar"></div>
                                </div>
                                <div class="form-group">
                                    <label>User name</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="text" name="name" class="form-control"  placeholder="User name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mobile number</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="text" name="mobile" class="form-control"  placeholder="Mobile number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="email" name="email" class="form-control"  placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="password" name="password" class="form-control"  placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label >Date of birth</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="date" name="dob" class="form-control" placeholder="Date of birth">
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
                                    <input type="submit" class="btn btn-md btn-success" name="adduser" placeholder="Submit">
                                </div>
                            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
<script>
/* checkIfPHPVariableIsEmpty('".$existeduser."');

function checkIfPHPVariableIsEmpty(variable) {
  // Check if the variable is undefined or null
  if (variable === undefined || variable === null) {
    alert('true');
	//return true;
	}
	else
	{
		alert('user already existing');
		
	}
  }
 */</script>