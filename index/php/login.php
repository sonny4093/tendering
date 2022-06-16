<?php
//error_reporting(0);
include "../../config.php";
session_start();
//ob_start();
if (isset($_REQUEST['login']))
{
	$username=$_REQUEST['username'];
	$password1=$_REQUEST['password'];
    $password=base64_encode($password1);

	// $sql_com= "SELECT * FROM tender WHERE username='$username' AND password='$password' AND status=1";
	// $result_com=mysqli_query($db, $sql_com);
	// $row_com=mysqli_fetch_array($result_com, MYSQLI_ASSOC);
	// $num_row=mysqli_num_rows($result_com);
	// // if ($num_row>=1) {
	// // 			$_SESSION['comittee_login']=$username;
	// // 			header("location: ../../comittee/html/tender.php");
	// // 		}

	$sql= "SELECT * FROM user WHERE username ='$username' AND password='$password'";
	$result=mysqli_query($db, $sql);
	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if ($count==1) 
	{

		$sql1="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result1=mysqli_query($db, $sql1);
		$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
		
		if ($row1['status']==0) {
			echo '<div class="error"><strong>Sorry !</strong> Your account is temporarly diactivated !</div>';
		} 
		else {

		if ($row1['role']=='admin' && $row1['status']==1) 
		{
			$_SESSION['login_user']=$row1['username'];
			//$_SESSION['username']=$row1['username'];
			header("location: ../../admin/html/account.php");

			//ob_end_flush();
			//require("../../admin/html/account.php");
		}
		else 
			if ($row1['role']=='purchasing officer' && $row1['status']==1) {
				$_SESSION['login_user']=$username;
				header("location: ../../pofficer/html/tender.php");
			}
		else 
			if ($row1['role']=='bidder' && $row1['status']==1) {
				$_SESSION['bidder_login']=$row1['username'];
				header("location: ../../bidder/html/tender.php");
			}
		else 
			if ($row1['role']=='finance officer' && $row1['status']==1) {
				$_SESSION['finance_login']=$username;
				header("location: ../../fofficer/html/tender.php");
			}
		else 
			if ($row1['position']=='professional' && $row1['status']==1) {
				$_SESSION['professional_login']=$username;
				header("location: ../../professional/html/tender.php");
			}
			}	
	}
	else
			{
				echo '<div class="error"><strong>Error !</strong> Invalid username or password !</div>';
				
			}

}
 ?>
