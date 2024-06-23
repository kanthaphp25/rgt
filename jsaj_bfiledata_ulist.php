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
		<th>User_ID</th>
		<th>NAME</th>
		<th>MOBILE</th>
		<th>EMAIL</th>
		<th>Role</th>
		<th>Address</th>
		<th>Date of birth</th>
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
 var action = 'update_time';
 $.ajax({
  url:"read_jsajx_file.php",
  method:"get",
	success: function(response){
		let data = $.parseJSON(response);
				//console.log(data);

		$.each(data, function(id,val) {
				// alert(val);

		var html = '<tr>';
		 html += '<td>'+val.user_id+'</td>';
		 html += '<td>'+val.name+'</td>';
		 html += '<td>'+val.mobile+'</td>';
		 html += '<td>'+val.email+'</td>';
		 html += '<td>'+val.role+'</td>';
		 html += '<td>'+val.address+'</td>';
		 html += '<td>'+val.date_of_birth+'</td></tr>';
		 $('#table_data').prepend(html);
		});
		} 
	});
}
 update_user_activity();


});
</script>
