<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body {
    text-align: -webkit-center;
}
form {
    display: inline-block;
	marigin-top:50px !important;
}
h1 p{padding-left:150px;color:white;background-color:green;}

</style>	
<body>
<h1><p> User Registration</p></h1>
	<form method="post" action="register_rgt.php" enctype="multipart/form-data" class="pb-modalreglog-form-reg">
		<div class="form-group">
			<label>User name</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="text" name="name" class="form-control"  placeholder="User name">
			</div>
		</div>
		<div class="form-group">
			<label>Mobile number</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="text" name="mobile" class="form-control"   placeholder="Mobile number">
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email address</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="email" name="email" class="form-control"  placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="email">Password</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="text" name="password" class="form-control"  placeholder="Enter new password">
			</div>
		</div>
		<div class="form-group">
			<label >Date of birth</label>
			<div class="input-group pb-modalreglog-input-group">
				<input type="date" name="dob" class="form-control"  placeholder="Date of birth">
			</div>
		</div>
		<div class="form-group" style="display:none;">
			<label >Role</label>
			<div class="input-group pb-modalreglog-input-group">

		<select name="role" class="form-control">
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
				<input type="text" name="userid" class="form-control" style="display:none;"placeholder="profile picture">
				<input type="file" name="user_image" class="form-control" placeholder="profile picture">
			</div>
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-md btn-success" name="register" placeholder="Submit">
		</div>
	</form>
</body>
</html>
