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
  background-color: burlywood;
  padding: 10px 10px;
}
a.anone{
	diplay:none !important;"
}
.header a {
	float: left;
    color: black;
    text-align: center;
    padding: 10px;
    font-size: 15px;
    line-height: 25px;
    border-radius: 10px;}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
  text-decoration:none;
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


.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
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
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
      $link = "http";
     
// Here append the common URL characters.
$link .= "://";
     
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
     
// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
 global $link;
$plink = 'http://localhost/rgt/profile_rgt.php';
//echo $_SESSION['role'].' - '.$plink;exit;
if(isset($_SESSION['role'])){
if($_SESSION['role'] == 1 & $plink == strtolower($link) 
	|| $_SESSION['role'] == 2 & $plink == strtolower($link))
{
?>  
  <a class="logo">   
  <button type="button" class="btn btn-info btn-sm " style="float:right; marigin-top:10px;" data-toggle="modal" data-target="#myModal">Add user</button>
</a>
	<?php 
	} 
} 

	?>

  <div class="header-right">
    <a class="menu" href="user_profile.php">Profile</a>
    <a  class="menu userm" href="profile_rgt.php">Users List</a>
    <a  class="menu" href="emp_details.php">Emp List</a>
    <a  class="menu" href="index1.php">Jsaj Html rendaring</a>
    <a  class="menu"  href="jsaj_emp_list.php">JsAj Emp List</a>
    <a  class="menu " style="display: none;" href="jsaj_bfiledata_ulist.php">JsAj Bfile Ulist </a>
	<a class="menu" href="change_password_rgt.php" target="_self" title="CHANGE PASSWORD">Change pwd</a>
	<a class="menu" href="logout_rgt.php" title="LOGOUT">LOGOUT</a>
  </div>
</div>


</body>
</html>
<script>
<?php
$page = explode('/',$_SERVER['REQUEST_URI']);
?>
$(document).ready(function() {
var currentpage = "<?php echo $page[2] ;?>";
const myArray = [];
	$("a").each(function() {
	  var href = $(this).attr("href");
		myArray.push(href);
	  if (currentpage == href) {
		$(this).addClass("active");
	  }
	});
	// console.log(myArray);
 });
</script>
