<?php
require_once 'includes/includes.php';

if(isset($_GET['table']))
{
	if($_GET['table'] == 'emp')
	{
	$bg_array = ['B+','B-','A+','A-','O+','O-','AB+','AB-'];
	$disgnation_array = ['Software','Doctor','Police','Teacher','Former','Solidger','Politician'];
		for($i=1; $i <=100; $i++){
	 $bloodgroup = array_rand($bg_array);
	 $designation = array_rand($disgnation_array);
						$sql_post="insert into 	employee_details(
						emp_name,
						mobile,
						email,
						blood_group,
						designation,
						address
							)values(
						'".form_str('Emp'.rand(1,99))."',
						'".form_str(rand(1,999).'43256897'.$i)."',
						'".form_str('emp'.rand(1,999).'@gmail.com')."',
						'".form_str($bg_array[$bloodgroup])."',
						'".form_str($disgnation_array[$designation])."',
						'".form_str('emp-address'.rand(1,999))."'
						)";
				mysqli_query($db,$sql_post) or die(mysqli_error());
		}
	}else if($_GET['table'] == 'user')
	{
			$role_array = [1,2,3];
		for($i=1; $i <=100; $i++){
				$rolegroup = array_rand($role_array);
				$sql_post="insert into user_table(
				name,
				mobile,
				email,
				password,
				role,
				address
				)values(
				'".form_str('user'.rand(1,99))."',
				'".form_str(rand(1,99).'237623'.rand(1,99))."',
				'".form_str('user'.rand(1,99).'@gmail.com')."',
				'".form_str(md5(123))."',
				'".form_str($role_array[$rolegroup])."',
				'".form_str('user-address'.rand(1,99))."'
				)";
				mysqli_query($db,$sql_post) or die(mysqli_error());
		}
	}
}
?>