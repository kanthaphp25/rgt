<?php
// echo "<pre>"; print_r($_POST);exit;
require_once 'includes/includes.php';
?>
<html>
<head>
<style>
th, td {padding:10px !important;}
tr a{display: block;text-align: center;text-decoration: none;}


table {
	marigin-top:20px !important;
}
</style>
</head>
<body> 
<table border="1" class="table table-striped table-bordered">
    <thead>
     <tr>
		<th>Employee Id</th>
		<th>Emp Name</th>
		<th>MOBILE</th>
		<th>EMAIL</th>
		<th>Blood Group</th>
		<th>Designation</th>
		<th>Address</th>
     </tr>
    </thead>
    <tbody id="table_data">
    </tbody>
   </table>
   
</body>
</html>

<script>
$(document).ready(function(){

function update_user_activity()
{
 $.ajax({
  url:"emp_search_filtter.php",
  type:'GET',
 data:{'empaj':'empaj'},
  method:"get",
	success: function(response){
						// console.log(response);

		let data = $.parseJSON(response);
						// console.log(data);
						// return;
		$.each(response, function(id,val) {
				alert(val);

		var html = '<tr>';
		 html += '<td>'+val.emp_id+'</td>';
		 html += '<td>'+val.emp_name+'</td>';
		 html += '<td>'+val.mobile+'</td>';
		 html += '<td>'+val.email+'</td>';
		 html += '<td>'+val.blood_group+'</td>';
		 html += '<td>'+val.designation+'</td>';
		 html += '<td>'+val.address+'</td></tr>';
		 $('#table_data').prepend(html);
		});
		} 
	});
}
 update_user_activity();


});
</script>
