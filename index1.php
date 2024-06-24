<?php
require_once 'includes/includes.php';
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
		beforeSend: function(){$("#overlay").show();},
    	success: function(data){
	// console.log(data);
		$("#paginationresult").html(data);
		setInterval(function() {$("#overlay").hide(); },500);
		},
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
<div id="overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
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
</body>
</html>
