<?php
require_once 'includes/dbconnect_rgt.php'; 
require_once __DIR__ . '/lib/DataSource.php';
$sql_get="SELECT 
				user_id,
				name,
				mobile,
				email,
				role,
				address,
				date_of_birth FROM user_table ORDER BY user_id ASC";
				
//# Writing data using mysqli

/* $resultset=mysqli_query($db,$sql_get) or die(mysqli_error());
$row=mysqli_fetch_all($resultset);
echo json_encode($data_array);
 */

//# Writing data using pdo
$db_handle = new DataSource();
$result = $db_handle->select($sql_get);
$jsondata = json_encode($result);

$path = 'userdata.json';
$fp = fopen($path,'w');
 fwrite($fp,$jsondata);
 fclose($fp);
?>