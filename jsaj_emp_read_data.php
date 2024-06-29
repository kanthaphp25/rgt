<?php
require_once("dbcontroller.php");
require_once("pagination.php");
$db_handle = new DBController();
$obj = new PerPage();
$perPage=$obj->perpage;
$emp_name = "";
$emp_id = "";
$queryCondition = "";
$newemparray = '';
// print_r($_GET);exit;
if(!empty($_GET['emp_name']) && !empty($_GET['emp_id']))
{
	// echo "both";exit;
	$newemparray = array_combine(array("emp_name","emp_id"),array($_GET['emp_name'],$_GET['emp_id']));
}
else if(!empty($_GET['emp_name']))
{
	// echo "onlyname";exit;
	$newemparray = array_combine(array("emp_name"),array($_GET['emp_name']));
}else if(!empty($_GET['emp_id']))
{
	// echo "onlyid";exit;
	$newemparray = array_combine(array("emp_id"),array($_GET['emp_id']));
}
// print_r($newemparray);exit;

if (! empty($newemparray)) {
    foreach ($newemparray as $k => $v) {
		// echo $k.' => '.$v.'<br>';
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
$paginationlink = "jsaj_emp_read_data.php?page=";	

if(isset($_GET["pagination_setting"]))
$pagination_setting = $_GET["pagination_setting"];
				
$page = 1;
if(!empty($_GET["page"])) {
	if($_GET["page"] == 1)
	{
		$_GET["rowcount"] = '';
	}
$page = $_GET["page"];
}
if(isset($_GET['url']))
{
	if($_GET['url'] == 'jsaj_emp_read_data.php')
	{
		$_GET["rowcount"] = '';
	}
}

// echo $_GET["rowcount"].' - empty - '.$queryCondition. ' - '.$page ;exit;

$start = ($page-1)*$perPage;
if($start < 0) $start = 0;

$query =  $sql . $orderby . " limit " . $start . "," . $perPage; 
$faq = $db_handle->runQuery($query);
if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}
// echo $_GET["rowcount"].' - '.$query.' - '.$pagination_setting;exit;

if($pagination_setting == "prev-next") {
	$perpageresult = $obj->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
} else {
	$perpageresult = $obj->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
}
// print_r($perpageresult);exit;
$rcount = array('rowcount'=>$_GET["rowcount"],'pagination_setting'=>$pagination_setting);
$war = array('resultset'=>$faq,'pagination'=>$perpageresult,'rowcount'=>$rcount);
echo json_encode($war);
?>
