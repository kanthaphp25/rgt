<?php
extract($_POST);
$n_err="";
$m_err="";
if(isset($register))
{
	$n_len=strlen($name);
	$m_len=strlen($mobile);	
	$nexp='/^[a-zA-Z]+$/';
	$mexp='/^[0-9]+$/';	
	$res=true;
	if(empty($name))
	{
		$res=false;
		$n_err="Name is required";		
	}
	else
	{
		if($n_len>5)
		{
			$res=false;
			$n_err= "Name should be less than 5 characters only";
		}
		else
		{
			if(!preg_match($nexp,$name))
			{
				$res=false;
				$n_err= "Enter valid Name";
			}
			else
			{
				$n_err= "";
			}	
		}
		
		
	}
	
if(empty($mobile))
	{
		$res=false;
		$m_err="mobile number is required";		
	}
	else
	{
		if($m_len!=10)
		{
			$res=false;
			$m_err="Mobile number should be 10 numbers only";
		}
		else
		{
			if(!preg_match($mexp,$mobile))
			{
				$res=false;
				$m_err="Enter valid Mobile number";
			}
			else
			{
				$m_err="";
			}	
		}
				
	}

	if($res==true)
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
			if($rest)
			{
				echo "Registration is successful";
			}
			else
			{			
				echo "Registration is failed";
			}
			
		}
	}
		
}
?>
<form method="post" action=" ">
Name:<input type="text" name="name" id="name"onblur="validate()"/>
<span style="color:red" id="n_err"><?php echo $n_err;?></span><br>
Mobile:<input type="varchar" name="mobile"id="mobile"onblur="validmobile()"/>
<span style="color:red" id="m_err"><?php echo $m_err;?></span><br>
Email:<input type="varchar" name="email">
<span style="color:red" id="e_err"></span><br>
Password:<input type="password" name="password"><br/>
<input type="submit" name="register" value="register">
</form>
<script>
 function validate()
 {
	var res=true;
	var name=document.getElementById('name').value;	
	var n_len=name.length;	
	var n_exp=/^[a-zA-Z]+$/;	
	if(name=="")
	{
	res=false;
	document.getElementById('n_err').innerHTML='Name is required ';
	}
	else
	{	
		if(name!="")
		{	
			if(n_len>5)
			{
			res=false;
			document.getElementById('n_err').innerHTML='Enter name less than 5 characters only';
			}
			else
			{
				if(!n_exp.test(name))
				{
				res=false;
				document.getElementById('n_err').innerHTML='Enter valid Name';
				}
				else
				{
				document.getElementById('n_err').innerHTML="";	
				}
			}
		}				
		else
		{
		document.getElementById('n_err').innerHTML="";	
		}

	}
	return res;	
}
function validmobile()
{		
var res=true;
var mobile=document.getElementById('mobile').value;	
var m_exp=/^[0-9]+$/;
var m_len=mobile.length;
if(mobile=="")
	{
	res=false;
	document.getElementById('m_err').innerHTML='mobile number is required ';
	}
	else
	{	
		if(mobile!="")
		{
			if(m_len!=10)
			{
			res=false;
			document.getElementById('m_err').innerHTML='Mobile number should be 10 numbers only';
			}
			else
			{
				if(!m_exp.test(mobile))
				{
				res=false;
				document.getElementById('m_err').innerHTML='Enter valid mobile number ';			
				}
				else
				{
				document.getElementById('m_err').innerHTML="";	
				}
			}
		}
		else
		{
		document.getElementById('m_err').innerHTML="";	
		}
	}	
	return res;	
}
	</script>