<?php
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
                    $queryCondition .= "emp_name LIKE '" . $v . "%'";
                    break;
                case "emp_id":
                    $emp_id = $v;
                    $queryCondition .= "emp_id LIKE '" . $v . "%'";
                    break;
            }
        }
    }
}
$orderby = " ORDER BY emp_id desc";
$sql = "SELECT * FROM employee_details " . $queryCondition;
$href = 'emp_details.php';

$perPage = 1;
$page = 1;
if (isset($_POST['page'])) {
    $page = $_POST['page'];
}
$start = ($page - 1) * $perPage;
if ($start < 0)
    $start = 0;

$query = $sql . $orderby . " limit " . $start . "," . $perPage;
$result = $database->select($query);

//echo "hi<pre>"; print_r($result);exit;

if (! empty($result)) {
    $result["perpage"] = showperpage($sql, $perPage, $href);
}
?>
