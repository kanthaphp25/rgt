<?php
require_once 'rgt/includes/includes.php';
?>
<HTML>
<HEAD>
<TITLE>AJAX Pagination with PHP</TITLE>
<style>
body{width:600px;font-family:"Helvetica Neue", HelveticaNeue, Helvetica, Arial, sans-serif;font-size:14px;}
.link {padding: 10px 15px;background: transparent;border:#bccfd8 1px solid;border-left:0px;cursor:pointer;color:#607d8b}
.disabled {cursor:not-allowed;color: #bccfd8;}
.current {background: #bccfd8;}
.first{border-left:#bccfd8 1px solid;}
.question {font-weight:bold;}
.answer{padding-top: 10px;}
#pagination{margin-top: 20px;padding-top: 30px;border-top: #F0F0F0 1px solid;}
.dot {padding: 10px 15px;background: transparent;border-right: #bccfd8 1px solid;}
#overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}
.page-content {padding: 20px;margin: 0 auto;}
.pagination-setting {padding:10px; margin:5px 0px 10px;border:#bccfd8  1px solid;color:#607d8b;}
</style>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script>
function getresult(url) {
	$.ajax({
		url: url,
		type: "GET",
		data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val()},
		beforeSend: function(){$("#overlay").show();},
		success: function(data){
		$("#pagination-result").html(data);
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
</HEAD>
<BODY>
<div id="overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
<div class="page-content">
	<div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
	Pagination Setting:<br> <select name="pagination-setting" onChange="changePagination(this.value);" class="pagination-setting" id="pagination-setting">
	<option value="all-links">Display All Page Link</option>
	<option value="prev-next">Display Prev Next Only</option>
	</select>
	</div>
	
	<div id="pagination-result">
	<input type="hidden" name="rowcount" id="rowcount" />
	</div>
</div>
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

<script>
getresult("getresult.php");
</script>
</BODY>
</HTML>
