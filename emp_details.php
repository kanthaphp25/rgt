<?php
require_once 'includes/includes.php';
include_once('emp_search_filtter.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script src="./js/validation.js" type="text/javascript"></script>
<style>
th, td {
    padding: 10px !important;
	border:2px solid;
}
</style>
</head>
<body>
<form name="frmSearch" method="post" action="">
    <div style="float:right;">
        <p>
            <input type="text" placeholder="Emp name" 
			name="search[emp_name]" value="<?php echo $emp_name; ?>" />
				
			<input type="text" placeholder="emp id" name="search[emp_id]"
			value="<?php echo $emp_id; ?>" /> <input type="submit"
			name="go" class="btnSearch" value="Search">
			
			<input type="reset" class="btnReset" value="Reset"
			onclick="window.location='emp_details.php'">
        </p>
    </div>
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
        <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $key => $value) {
                            if (is_numeric($key)) {
                                ?>
                     <tr>
                <td><?php echo $result[$key]['emp_id']; ?></td>
                <td><?php echo $result[$key]['emp_name']; ?></td>
                <td><?php echo $result[$key]['mobile']; ?></td>
                <td><?php echo$result[$key]['email']; ?></td>
                <td><?php echo$result[$key]['designation']; ?></td>
                <td><?php echo$result[$key]['blood_group']; ?></td>
                <td><?php echo$result[$key]['date_of_birth']; ?></td>
                <td><?php echo$result[$key]['date_of_joining']; ?></td>
                <td><?php echo$result[$key]['address']; ?></td>
            </tr>
                    <?php
                            }
                        }
                    } ?>
                    </tbody>
    </table>
<div class="pagination" style="float:right; marigi-right:40px;">
  <!--<a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>-->
</div>

	<p style="float:right;    margin-right: 90px;"><?php
		if (isset($result["perpage"])) {
			
			echo $result["perpage"];
		}?></p>
</form>
</body>
</html>