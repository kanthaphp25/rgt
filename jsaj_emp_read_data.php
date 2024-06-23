<?php
require_once 'includes/dbconnect_rgt.php'; 
require_once __DIR__ . '/lib/DataSource.php';

$sql_get="SELECT * FROM employee_details order by emp_id DESC";


//# Writing data using mysqli

 $resultset=mysqli_query($db,$sql_get) or die(mysqli_error());
$row=mysqli_fetch_all($resultset);
echo json_encode($data_array);
 

//# Writing data using pdo

// $db_handle = new DataSource();
// $result = $db_handle->select($sql_get);
// echo json_encode($result);

?>