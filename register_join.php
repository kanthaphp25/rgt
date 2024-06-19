<?php
extract($_POST);
if(isset($register))
{	
	require_once 'dbconnect.php';
	require_once 'validate_str.php';
	$sql_get="SELECT * FROM user_table WHERE email='$email'";
	$ret=mysqli_query($sql_get);		
	$count=mysqli_num_rows($ret);
	if($count>0)
	{
		echo "Email already existed";
	}
	else
	{
		
		$sqlins="insert into user_table(name,mobile,email,password)values('".form_str($name)."','".form_str($mobile)."','".form_str($email)."','".form_str($password)."')";
		$rest=mysqli_query($sqlins);	
		$cos=count($contry);
		$col=count($lang);
		$fk=mysqli_insert_id();	
		if($rest)
		{
			for($i=0;$i<$cos;$i++)
			{
				$sql_qry="insert into country_tbl(country_name,u_id)values('$contry[$i]',$fk)";
				$result=mysqli_query($sql_qry);
				
			}
			if($result)
			{
				echo "success contry registration";
			}
		
			for($i=0;$i<$col;$i++)
			{			
			$sql_usl="insert into users_lang_tbl(user_lang_name,user_lfk_id)values('$lang[$i]',$fk)";
			$re_lk=mysqli_query($sql_usl);											
			}
			if($re_lk)
			{
			echo " success lang registration";	
			}
		}
	}	
}
?>
<form method="post" action=" ">
Name:<input type="text" name="name" id="name"><br/><br/>
Mobile:<input type="varchar" name="mobile"><br/><br/>
Email:<input type="varchar" name="email"><br/><br/>
Password:<input type="password" name="password"><br/><br/>

Skills:
<input type="checkbox" name="contry[]" value="india"> india
<input type="checkbox" name="contry[]" value="usa">usa
<input type="checkbox" name="contry[]" value="uk">uk
<input type="checkbox" name="contry[]" value="australiya">australiya<br/><br/>
  
Languages:
<input type="checkbox" name="state[]"value="English">English
<input type="checkbox" name="state[]"value="Telugu">Telugu
<input type="checkbox" name="state[]"value="Hindi">Hindi<br/><br/>

<input type="submit" name="register" value="register">
</form>


