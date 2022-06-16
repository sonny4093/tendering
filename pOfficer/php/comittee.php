<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/employee.css">
</head>
<body>

</body>
</html>


<?php
include("../../config.php");

	?>
	

	<?php
	$id=$_REQUEST['id'];
	$sql="SELECT * FROM tender WHERE  class='$id'";
	$result=mysqli_query($db, $sql);
	if (mysqli_num_rows($result)==0) {
	?>
	<table style="
		color: #a94442; 
		background-color: #f2dede; 
		border-color: #d6e9c6;
		padding: 15px;
		margin-bottom: 20px;
		border: none;
		border: 1px solid transparent;
		border-radius: 4px;padding-right: 35px;
		width:750px;
		margin-left:8px;
		margin-top:10px;
		text-align:left;
		">
		<tr ><th><strong>Sorry!</strong><w>There is no Employee </div></th></tr></table>
	<?php
}
else {
	?>
<div class="table">
		<table>
			<table width="100%"   style="border-collapse:collapse; ">
			<thead>
			
			</thead>
			<tbody>
<?php

	while($row=mysqli_fetch_assoc($result) ){  ?>
	
	<tr><td style="white-space: nowrap;border-color: white; color: #337ab7;"><?php echo $row['comittee_name']; ?><w></td></tr>
	<?php break; } 
	
		
}
?>

