<?php
	include ("../../config.php");

if (isset($_REQUEST['submit'])) {


	function validatePassword($password){
		if(!preg_match('/^[0-9A-Za-z!@#$%]{4,12}$/', $password)) {
			echo '<br><label style="color:red; margin-left:-23px;">Password must be above 4 character !</label>';
		}
	} 

	

	$newpassword=$_REQUEST['newpassword'];
	$confirmpassword=$_REQUEST['confirmpassword'];
	$oldpassword=$_REQUEST['oldpassword'];

	$sql2="SELECT * FROM user WHERE username='".$_SESSION['login_user']."'";
	$result2=mysqli_query($db,$sql2);
	while ($row2=mysqli_fetch_assoc($result2)) {


	if ($newpassword==$confirmpassword && $row2['password']==$oldpassword && preg_match('/^[0-9A-Za-z!@#$%]{4,12}$/', $newpassword)) {

	$sql="UPDATE user set password='$newpassword' WHERE username='".$_SESSION['login_user']."'";
	$result=mysqli_query($db, $sql);
	 if($result)
	{		
		echo '<div class="success"><strong>Success!</strong><w>Password changed successfully.</div>';
}
}
else {
	echo '<div class="error"><strong>Error!</strong><w>Password not changed !.</div>';
}
}	
}
	?>	