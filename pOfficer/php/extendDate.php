<?php
	include ("../../config.php");
	

if (isset($_REQUEST['save'])) { 
	 $id=$_REQUEST['id'];
     $sql_prev="SELECT * FROM new WHERE id='$id'";
     $result_prev=mysqli_query($db,$sql_prev);

   
	$closing_date=$_REQUEST['closing_date'];
	$opening_date=$_REQUEST['opening_date'];


	$currenttime=strtotime(' now ');

	while ($row_prev=mysqli_fetch_assoc($result_prev)) {
		if (strtotime($closing_date)<=strtotime($row_prev['closing_date']) ||strtotime($opening_date)<=strtotime($row_prev['opening_date'])) {	
		echo '<div class="error"><strong>Error!</strong><w>The date is not correctly extract.'; 
		
			
		}
		
		
	}
  if ((strtotime($closing_date)<=$currenttime) || (strtotime($closing_date<=$opening_date))) {
		echo '<div class="error"><strong>Error!</strong><w>Closing date must after current and opening date.'; ?> <a href="../html/tenderInfo.php?id=<?php echo $id; ?>">Click here</a></div> 
<?php
		/*echo '<style type="text/css">
	.form, .employeeinfo {
		display: none;
	}
</style>';
		$result="";
		$sql="";*/
		
		
	}
	else
	if (strtotime($opening_date)>=strtotime($closing_date)) {
		echo '<div class="error"><strong>Error!</strong><w>Opening date must before closing date.'; ?> <a href="tenderInfo.php?id=<?php echo $id; ?>">Click here</a></div> 
<?php
		/*echo '<style type="text/css">
	.form, .employeeinfo {
		display: none;
	}
</style>';
		$result="";
		$sql="";*/


	} 
		else{

	$sql="UPDATE tender set closing_date='$closing_date', opening_date='$opening_date' WHERE id='$id'";
	$result=mysqli_query($db, $sql);
	if ($result) {
		echo '<div class="success"><strong>Success ! </strong>Tender closing and opening date is successfully extended !';?>  <a href="tenderInfo.php?id=<?php echo $id; ?>">Click here</a></div> 
<?php
	} 
	
}
}
	
	?>	
