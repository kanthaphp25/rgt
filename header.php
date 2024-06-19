<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

</style>
</head>
<body>
<div class="header">
<?php if(isset($_SESSION['name'])){ ?>

  <a href="#default" class="logo">Welcom To 
  <?php echo ucfirst($_SESSION['name']);?>
  </a>
<?php
}
if(isset($_SESSION['role'])){
	if($_SESSION['role'] == 1 || $_SESSION['role'] == 2)
	{
?>  
  <a class="logo">    <button type="button" class="btn btn-info btn-sm " style="float:right; marigin-top:10px;" data-toggle="modal" data-target="#myModal">Add user</button>
</a>
	<?php 
	} 
} 

	?>
  <div class="header-right">
    <a class="active" href="profile_rgt.php">Home</a>
	<a href="change_password_rgt.php" target="_self" title="CHANGE PASSWORD">CHANGE PASSWORD</a>
	<a href="logout_rgt.php" title="LOGOUT">LOGOUT</a>
  </div>
</div>


</body>
</html>
