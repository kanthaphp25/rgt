<select>
<option value=""></option>
<?php 
require_once "dbconnect.php";
$sql_qry="select * from user_table";
$res=mysqli_query($sql_qry);
$count=mysqli_num_rows($res);
if($count>0)
{
$i=0;
	while($row=mysqli_fetch_assoc($res))
	{
		?>
		
		<option label="Name"><?php echo $row['user_id']?></option>	
		
		<?php
	$i++;	
	}	
}
else
	echo "no records in table";
?>
</select>

<select>
<option value=""></option>
<?php 
require_once "dbconnect.php";
$sql = "SELECT user_skill_id,user_skill_name,user_sfk_id FROM PRODUCT p
             JOIN PRODUCT_SIZES ps ON ps.size_id = p.size_id";
   $result = mysqli_query($sql, $connection) or die(mysqli_error());
   while($row = mysqli_fetch_array($result)) {
?>
<tr>
  <td><? echo $row['id']; ?></td>
  <td><? echo $row['name']; ?></td>
  <td><? echo $row['size_name']; ?></td> 
</tr>
<? } ?>$res=mysqli_query($sql_qry);
$count=mysqli_num_rows($res);
if($count>0)
{
$i=0;
	while($row=mysqli_fetch_assoc($res))
	{
		?>
		
		<option value="<?php echo $row['user_id']?>"><?php echo $row['user_skill_name']?></option>	
		
		<?php
	$i++;	
	}	
}
else
	echo "no records in table";
?>
</select>