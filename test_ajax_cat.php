<select name="cat_id" id="cat_id" onchange="ajax_subcat();">
<option value="">select category</option>
<?php 
require_once "includes_esa/dbconnect_esa.php";
$sql_prod="select * from categories_esa";
$ret=mysqli_query($sql_prod);
$i=1;
while($row=mysqli_fetch_assoc($ret))
{
?>
<option value="<?php echo $row['cs_id'];?>"><?php echo $row['cs_name'];?></option>
<?php
$i++;
}
?>
</select>
<span id="result">
	<select name="subcat" id="subcat">
		<option value="">select sub category</option>
	</select>
</span>
<script type="text/javascript">
function ajax_subcat()
{
var cid=document.getElementById('cat_id').value;
if(window.XMLHttpRequest)
var obj=new XMLHttpRequest;
else
var obj=new ActiveXObject("Microsoft.XMLHTTP");
obj.open("GET","test_ajax_subcat.php?cid="+cid,true);
obj.send();
	obj.onreadystatechange=function(){
		if(obj.readyState==4)
		{
			document.getElementById('result').innerHTML=obj.responseText;
		}
	}
}
</script>