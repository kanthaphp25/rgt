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
		$cos=count($skill);
		$col=count($lang);
		$fk=mysqli_insert_id();	
		if($rest)
		{
			for($i=0;$i<$cos;$i++)
			{
				$sql_qry="insert into users_skills_tbl(user_skill_name,user_sfk_id)values('$skill[$i]',$fk)";
				$result=mysqli_query($sql_qry);
				
			}
			if($result)
			{
				echo "success skill registration";
			}
		
			FOR($I=0;$I<$COL;$I++)
			{			
			$SQL_USL="INSERT INTO USERS_LANG_TBL(USER_LANG_NAME,USER_LFK_ID)VALUES('$LANG[$I]',$FK)";
			$RE_LK=mysqli_QUERY($SQL_USL);											
			}
			IF($RE_LK)
			{
			ECHO " SUCCESS LANG REGISTRATION";	
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
<input type="checkbox" name="skill[]" value="PHP"> PHP
<input type="checkbox" name="skill[]" value=".Net">.Net
<input type="checkbox" name="skill[]" value="Java">Java
<input type="checkbox" name="skill[]" value="JS">JS<br/><br/>
  
Languages:
<input type="checkbox" name="lang[]"value="English">English
<input type="checkbox" name="lang[]"value="Telugu">Telugu
<input type="checkbox" name="lang[]"value="Hindi">Hindi<br/><br/>

<input type="submit" name="register" value="register">
</form>


