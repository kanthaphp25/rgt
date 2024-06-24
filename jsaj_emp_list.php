<?php
// echo "<pre>"; print_r($_POST);exit;
require_once 'includes/includes.php';
?>
<html>
<head>
<style>
.link {padding: 10px 15px;background: transparent;border:#bccfd8 1px solid;border-left:0px;cursor:pointer;color:#607d8b}
.disabled {cursor:not-allowed;color: #bccfd8;}
.current {background: #bccfd8;}
.first{border-left:#bccfd8 1px solid;}
.question {font-weight:bold;}
.answer{padding-top: 10px;}
#pagination{margin-top: 20px;padding-top: 30px;border-top: #F0F0F0 1px solid;}
.dot {padding: 10px 15px;background: transparent;border-right: #bccfd8 1px solid;}

th, td {
    padding: 10px !important;
	border:2px solid;
}
</style>
<script>
function getresult(url) {
	var page_sttings = $("#pagination-setting").val();
	var row_count = $("#rowcount").val();

	// var empsearch = $("input[name='search[]']")
              // .map(function(){return $(this).val();}).get();;
			  if(url != 'getresult.php' )
			  {
	var empnameid = $("#empname_id").val();
	var empid = $("#empid").val();
			  }else
			  {
	var empnameid = '';
	var empid = '';
			  }
	// console.log(url+'  -  '+empnameid+' - '+empid);
	$.ajax({
		url: url,
		type: "GET",
		data:  {'url':url,rowcount:row_count,"pagination_setting":page_sttings,'emp_name':empnameid,'emp_id':empid},
	success: function(response){
		let data = $.parseJSON(response);
		$.each(response, function(id,val) {
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
		error: function() 
		{} 	        

		});
   }
function changePagination(option) {
	if(option!= "") {
		getresult("getresult.php");
	}
}
</script>
</head>
<body> 
<div class="page-content">
	<div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
	Pagination Setting:<br> <select name="pagination-setting" onChange="changePagination(this.value);" class="pagination-setting" id="pagination-setting">
	<option value="all-links">Display All Page Link</option>
	<option value="prev-next">Display Prev Next Only</option>
	</select>
	</div>
	
</div>
<form name="frmSearch" method="post" action="">
    <div style="float:right;">
        <p>
            <input type="text" placeholder="Emp name" 
			name="search[emp_name]" id="empname_id" value="" />
				
			<input type="text" id="empid" placeholder="emp id" name="search[emp_id]"
			value="" /> 
			
			<input type="button" name="go" onclick="getresult('getresult.php?page=1')" class="btnSearch" value="Search">
			
			<input type="reset" onclick="getresult('getresult.php')" 
			class="btnReset" value="Reset">
        </p>
    </div>
	<div id="paginationresult"></div>
	<div id="pagination-result">
		<input type="hidden" name="rowcount" id="rowcount" />
	</div>
</form>

<script>
getresult("getresult.php");
</script>
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
		getresult("getresult.php");

$(document).ready(function(){

function update_user_activity()
{
 $.ajax({
  url:"emp_search_filtter.php",
  type:'GET',
 data:{'empaj':'empaj'},
  method:"get",
	success: function(response){
		let data = $.parseJSON(response);
		$.each(response, function(id,val) {
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
