<?php
require_once 'includes/dbconnect_rgt.php'; 
require_once __DIR__ . '/lib/perpage.php';
require_once __DIR__ . '/lib/DataSource.php';
$database = new DataSource();

$emp_name = "";
$emp_id = "";
$queryCondition = "";
if (! empty($_POST["search"])) {
    foreach ($_POST["search"] as $k => $v) {
        if (! empty($v)) {

            $queryCases = array(
                "emp_name",
                "emp_id"
            );
            if (in_array($k, $queryCases)) {
                if (! empty($queryCondition)) {
                    $queryCondition .= " AND ";
                } else {
                    $queryCondition .= " WHERE ";
                }
            }
            switch ($k) {
                case "emp_name":
                    $emp_name = $v;
                    $queryCondition .= "emp_name LIKE '%" . $v . "%'";
                    break;
                case "emp_id":
                    $emp_id = $v;
                    $queryCondition .= "emp_id LIKE '%" . $v . "%'";
                    break;
            }
        }
    }
}
$orderby = " ORDER BY emp_id ASC";
$sql = "SELECT * FROM employee_details " . $queryCondition;
if(isset($_REQUEST['empaj']))
{
	$href = 'jsaj_emp_list.php';
	if($_REQUEST['empaj'] == "empaj")
	{
		echo json_encode($result);exit;
	}
}else{
	$href = 'emp_details.php';
}
$perPage = $per_page;
$page = 1;
if (isset($_POST['page'])) {
	echo 'href1';
	if($_POST["page"] != '<<' && $_POST["page"] != '>>')
	{
    $page = $_POST['page'];
	}
}
$start = ($page - 1) * $perPage;
if ($start < 0)
    $start = 0;

$query = $sql . $orderby . " limit " . $start . "," . $perPage;
$result = $database->select($query);

if (! empty($result)) {
    $result["perpage"] = showperpage($sql, $perPage, $href);
}
?>
