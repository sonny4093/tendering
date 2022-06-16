<?php
	include ("../../config.php");
if (isset($_REQUEST['username'])) {

	$name_error_msg="";
function validateName($name){
	//if (isset($_REQUEST['submit'])) {
		if(!preg_match("/^[a-z A-Z]+$/",$name)) {
			echo '<br><label style="color:red; margin-left:-23px;">Invalid Input</label>';
			$name_error_msg="Invalid Input";
		}
	//} 
}



// Id validation
$phone_error_msg="";
function validatePhone($phone) {
	if(!preg_match("/^[+]{1}[0-9]{12}+$/",$phone)) {
		echo '<br><label style="color:red; margin-left:-23px;">Invalid Input</label>';
		$phone_error_msg="Invalid Input";
	}
	
}
	$fname=$_REQUEST['fname'];
	$mname=$_REQUEST['mname'];
	$lname=$_REQUEST['lname'];
	$sex=$_REQUEST['sex'];
	$company_name=$_REQUEST['company_name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$address=$_REQUEST['address'];
	$username=$_REQUEST['username'];
	
	$conf_password=base64_encode($_POST['password']);
	$conf_comfirm=base64_encode($_POST['confirm']);
	$password=$conf_password;
	$confirm=$conf_comfirm;
// 	$photo=$_FILES['image']['name'];
// $target_path = '../../img/'.basename( $_FILES['image']['name']);  
// move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);
 
                    //$res=mysqli_query($db, $sql);
	// $target="../../img/".basename($_FILES['image']['name']);
	// $image=$_FILES['image']['name'];
	if ($password!=$confirm) {
		echo '<div class="error"><strong>Error ! </strong> Password mismatched ! </div>';
	}
	if ($password==$confirm) {


	$sqlun="SELECT * FROM user WHERE  username='$username'";
	$resultun=mysqli_query($db,$sqlun);

	/*$sql_user="SELECT * FROM tender WHERE  username='$username'";
	$result_user=mysqli_query($db,$sql_user);*/
	if (mysqli_num_rows($resultun)>=1 /*|| mysqli_num_rows($result_user)>=1*/) {
		echo '<div class="error"><strong>Error ! </strong> Username already exist ! </div>';
		
	} else
	if(!preg_match("/^[+]{1}[0-9]{12}+$/",$phone)  || !preg_match("/^[a-z A-Z]+$/",$fname) || !preg_match("/^[a-z A-Z]+$/",$mname) || !preg_match("/^[a-z A-Z]+$/",$lname) || !preg_match("/^[a-z A-Z]+$/",$address) || !preg_match("/^[a-z A-Z]+$/",$company_name) ||  mysqli_num_rows($resultun)>=1 /*|| mysqli_num_rows($result_user)>=1*/) {
		echo '<div class="error"><strong>Error!</strong> Employee registration not successfull.</div>';
	}
	else {

		$sql="INSERT INTO user (fname, mname, lname, sex, company_name,  email, phone, position, role, address, username, password,status)  VALUES('$fname', '$mname', '$lname', '$sex', '$company_name',  '$email', '$phone', 'bidder', 'bidder', '$address', '$username', '$password',1)";
	$result=mysqli_query($db, $sql);
	 if($result)
	{		
		echo '<div class="success"><strong>Success!</strong><w>Your registration is successfull.</div>';
}
}
	}
	
		
}
	?>
		