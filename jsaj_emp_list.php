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

	  if(url != 'jsaj_emp_read_data.php' )
	  {
		var empnameid = $("#empname_id").val();
		var empid = $("#empid").val();
	  }
	  else
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
			// alert(response);
			// console.log(response);
			let data = $.parseJSON(response);
			// console.log(data.pagination);
			var row = '';
				$.each(data.resultset, function(id,val) {
				 row += '<tr>';
				 row += '<td>'+val.emp_id+'</td>';
				 row += '<td>'+val.emp_name+'</td>';
				 row += '<td>'+val.mobile+'</td>';
				 row += '<td>'+val.email+'</td>';
				 row += '<td>'+val.blood_group+'</td>';
				 row += '<td>'+val.designation+'</td>';
				 row += '<td>'+val.address+'</td></tr>';
				 $('#table_data').html(row);
				});
				
				var rowcount ='';
				rowcount += '<div class="question"><input type="hidden" id="rowcount" name="rowcount" value="' + data.rowcount.rowcount + '" /></div>';
				$("#rowcountid").html(rowcount);
				
				var output = '';
				if(data.rowcount.pagination_setting == 'all-links')
				{
					if(data.pagination.current_page == 1) 
						output += '<span class="link first disabled">&#8810;</span><span class="link disabled">&#60;</span>';
					else	
						output += '<a class="link first" onclick="getresult(\'' + data.pagination.page_url + (1) + '\')" >&#8810;</a><a class="link" onclick="getresult(\'' + data.pagination.page_url + (data.pagination.current_page - 1) + '\')" >&#60;</a>';
					
					
					if((data.pagination.current_page - 3) > 0) {
						if(data.pagination.current_page == 1)
							output += '<span id=1 class="link current">1</span>';
						else				
							output += '<a class="link" onclick="getresult(\'' + data.pagination.page_url + '1\')" >1</a>';
					}
					if((data.pagination.current_page-3) > 1) {
							output +='<span class="dot">...</span>';
					}
						var pagecount = parseInt(data.pagination.current_page)+2;

						for(var i = (data.pagination.current_page-2); i <= pagecount; i++)
						{
						if(i < 1) continue;
						if(i > data.pagination.count_pages) break;
							if(data.pagination.current_page == i)
							{
								output  += '<span id='+i+' class="link current">'+i+'</span>';
							}
							else
							{
							//alert("for else");
								output  += '<a class="link" onclick="getresult(\'' + data.pagination.page_url +i + '\')" >'+i+'</a>';
							}
						}
						if((data.pagination.count_pages - pagecount) > 1) {
							output +='<span class="dot">...</span>';
						}
						if((data.pagination.count_pages - pagecount) > 0) {
							if(data.pagination.current_page == data.pagination.count_pages)
								output +='<span id=' + (data.pagination.count_pages) +' class="link current">' + (data.pagination.count_pages) +'</span>';
							else				
								output += '<a class="link" onclick="getresult(\'' +data.pagination.page_url+  (data.pagination.count_pages) +'\')" >' + (data.pagination.count_pages) +'</a>';
						}
						
						if(data.pagination.current_page < data.pagination.count_pages)
						 output +='<a  class="link" onclick="getresult(\''  + data.pagination.page_url + (parseInt(data.pagination.current_page)+1) + '\')" >></a><a  class="link" onclick="getresult(\'' + data.pagination.page_url  + (data.pagination.count_pages) + '\')" >&#8811;</a>';
						else				
						output +='<span class="link disabled">></span><span class="link disabled">&#8811;</span>';
						
				}
				if(data.rowcount.pagination_setting == 'prev-next')
				{
					if(data.pagination.current_page == 1) 
						output +='<span class="link disabled first">Prev</span>';
					else	
						output +='<a class="link first" onclick="getresult(\'' + data.pagination.page_url + (data.pagination.current_page-1) + '\')" >Prev</a>';			
					
					if(data.pagination.current_page < data.pagination.count_pages)
						output +='<a  class="link" onclick="getresult(\'' + data.pagination.page_url + (parseInt(data.pagination.current_page)+1) + '\')" >Next</a>';
					else				
						output +='<span class="link disabled">Next</span>';
				}
						$("#pagination-result").html(output);
			}
		});
   }
function changePagination(option) {
	if(option!= "") {
		getresult("jsaj_emp_read_data.php");
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
			
			<input type="button" name="go" onclick="getresult('jsaj_emp_read_data.php?page=1')" class="btnSearch" value="Search">
			
			<input type="reset" onclick="getresult('jsaj_emp_read_data.php')" 
			class="btnReset" value="Reset">
        </p>
    </div>
</form>

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
	<div id="rowcountid"></div>
	<div id="paginationresult"></div>
	<div id="pagination-result">
		<input type="hidden" name="rowcount" id="rowcount" />
	</div>
</body>
</html>

<script>
	getresult("jsaj_emp_read_data.php");
</script>
