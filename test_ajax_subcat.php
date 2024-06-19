<span class="spn-subcat" id="result">
	<select name="subcat_id" class="sel_subcat">
		<option value="">select sub category</option>
			<?php  
			extract($_GET);
			require_once "includes_esa/dbconnect_esa.php";
			$sql_sucat="select * from  sub_category where cat_id=$cid";
			$res=mysqli_query($sql_sucat);
			$i=1;
			while($row=mysqli_fetch_assoc($res))
			{
			?>
			<option value="<?php echo $row['Sub_Cate_Id'];?>"><?php echo $row['Sub_Cate_Name'];?></option>
			<?php
			}
			?>
	</select>
</span><br/><br/>