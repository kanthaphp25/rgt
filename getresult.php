<?php
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

/* if(!empty($_GET['empname']))
{
	$empname = $_GET['empname'];
}
	else $empname = '';
	
if(!empty($_GET['empid'])) 
{
	$empid = $_GET['empid']; 
}
else 
	$empid = '';
 */
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
$paginationlink = "getresult.php?page=";	

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
	if($_GET['url'] == 'getresult.php')
	{
		$_GET["rowcount"] = '';
	}
}

// echo $_GET["rowcount"].' - empty - '.$queryCondition. ' - '.$page ;exit;

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;

$query =  $sql . $orderby . " limit " . $start . "," . $perPage->perpage; 
$faq = $db_handle->runQuery($query);
if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

if($pagination_setting == "prev-next") {
	$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
} else {
	$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
}

$output = '
    <table class="stripped">
        <thead>
            <tr>
                <th>emp_id</th>
                <th>emp_name</th>
                <th>mobile</th>
                <th>email</th>
                <th>designation</th>
                <th>blood_group</th>
                <th>date_of_birth</th>
                <th>date_of_joining</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody id="paginationresult">

';
foreach($faq as $k=>$v) {
 $output .= '<div class="question"><input type="hidden" id="rowcount" name="rowcount" value="' . $_GET["rowcount"] . '" /></div>';
 // $output .= '<div class="answer">' . $faq[$k]["emp_name"] . '</div>';
 $output .= '
 <td>' . $faq[$k]["emp_id"] . '</td>';
 $output .= '<td>' . $faq[$k]["emp_name"] . '</td>';
 $output .= '<td>' . $faq[$k]["mobile"] . '</td>';
 $output .= '<td>' . $faq[$k]["email"] . '</td>';
 $output .= '<td>' . $faq[$k]["designation"] . '</td>';
 $output .= '<td>' . $faq[$k]["blood_group"] . '</td>';
 $output .= '<td>' . $faq[$k]["date_of_birth"] . '</td>';
 $output .= '<td>' . $faq[$k]["date_of_joining"] . '</td>';
 $output .= '<td>' . $faq[$k]["address"] . '</td></tr> ';
}
$output .='</tbody>
    </table>';
if(!empty($perpageresult)) {
$output .= '<div id="pagination">' . $perpageresult . '</div>';
}
echo  $output;
?>
