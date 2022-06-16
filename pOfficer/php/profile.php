<?php
	include ("../../config.php");

if (isset($_REQUEST['submit'])) {
	$newpassword=$_REQUEST['newpassword'];
	$confirmpassword=$_REQUEST['confirmpassword'];

	if ($newpassword==$confirmpassword) {

	$sql="UPDATE user set password='$newpassword' WHERE username='".$_SESSION['login_user']."'";
	$result=mysqli_query($db, $sql);
	 if($result)
	{		
		echo '<div style="
		color: #3c763d; 
		background-color: #dff0d8; 
		border-color: #d6e9c6;
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;padding-right: 35px;
		width:765px;
		margin-left:48px;
		margin-top:10px;
		text-align:left;
		"><strong>Success!</strong><w>Password changed successfully.</div>';
}
}
	function error() {
		echo '<div style="
		color: #a94442;
		background-color: #f2dede;
		border-color: #ebccd1;
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;padding-right: 35px;
		width:765px;
		margin-left:48px;
		margin-top:10px;
		text-align:left;
		"><strong>Error!</strong><w>Employee registration not successfull.</div>';
		
	}
		
}
	?>	