<?php
function searchEmployee(){
	echo '<link rel="stylesheet" type="text/css" href="../css/employee.css">';
include("../../config.php");

	$search=$_REQUEST['search'];

	$sql="SELECT * FROM user WHERE category='$search'";
	$result=mysqli_query($db, $sql);
	$row = mysqli_num_rows($result);
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
		margin-top:30px;
		text-align:left;
		">
		<tr ><th><strong>Sorry!</strong><w>You enter unrelated Search </div></th></tr></table>
	<?php
}
else {
	?>
<div class="table">
		<br><table>
			<table width="100%"  style="border-collapse:collapse;">
			<thead>
			<tr><th><strong>No</strong></th><th><strong>Name</strong></th><th><strong>Sex</strong></th><th><strong> ID</strong></th></th><th><strong> Email</strong></th><th><strong> Phone</strong></th></th><th><strong> Role</strong></th></tr>
			</thead>
			<tbody>
<?php
	while($row=mysqli_fetch_assoc($result) ){ ?>
	
	<tr><td><?php echo "1"; ?></td><td style="white-space: nowrap;"><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td><td><?php echo $row['sex']; ?></td><td><?php echo $row['id']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['phone']; ?></td><td><?php echo $row['role']; ?><w></td></tr>
	<?php } 
	
		
}
}











function searchAccount()
{
	echo '<link rel="stylesheet" type="text/css" href="../css/account.css">';
include("../../config.php");

	$search=$_REQUEST['search'];

	$sql="SELECT * FROM user WHERE id='$search' OR fname='$search' OR role='$search'";
	$result=mysqli_query($db, $sql);
	$row = mysqli_num_rows($result);
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
		<tr ><th><strong>Sorry!</strong><w>You enter unrelated Search </div></th></tr></table>
	<?php
}
else {
	?>
<div class="table">
		<br><table>
			<table width="100%"  style="border-collapse:collapse;">
			<thead>
			<tr><th><strong>No</strong></th><th><strong>Name</strong></th><th><strong>Sex</strong></th><th><strong> ID</strong></th></th><th><strong> Email</strong></th><th><strong> Phone</strong></th></th><th><strong> Role</strong></th><th><strong> Username</strong></th> <th><strong> Password</strong></th></tr>
			</thead>
			<tbody>
<?php
	while($row=mysqli_fetch_assoc($result) ){ ?>
	
	<tr><td><?php echo "1"; ?></td><td style="white-space: nowrap;"><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td><td><?php echo $row['sex']; ?></td><td><?php echo $row['id']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['phone']; ?></td><td><?php echo $row['role']; ?><w></td><td><?php echo $row['username']; ?><w></td><td><?php echo $row['password']; ?><w></td>
	<?php 
			if ($row['status']==1) { ?>
				<td><a style="color: #a94442;background-color: #f2dede; " class="update" href="../php/diactivate.php?id=<?php echo $row["id"]; ?>" >Diactivate</a><w></td>
			<?php }
			else if($row['status']==0) { ?>
				<td><a style=" " class="update" href="../php/activate.php?id=<?php echo $row["id"]; ?>" >Activate</a><w></td>
			<?php }
			?>
	<td><a class="update" href="update.php?id=<?php echo $row["id"]; ?>" >Update</a><w></td><td><a style="color: #a94442;background-color: #f2dede; " class="update" href="../php/deleteAccount.php?id=<?php echo $row["id"]; ?>" >Delete</a><w></td><td><a style=" " class="update" href="../php/resetPassword.php?id=<?php echo $row["id"]; ?>" >Reset Password</a><w></td></tr>
			<?php 
			}
}
}
			 ?>






