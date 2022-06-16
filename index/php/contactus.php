<?php
	include ("../../config.php");
if (isset($_REQUEST['send'])) {

	$name_error_msg="";
function validateName($name){
	//if (isset($_REQUEST['submit'])) {
		if(!preg_match("/^[a-z A-Z]+$/",$name)) {
			echo '<br><label style="color:red;">Invalid Input</label>';
			$name_error_msg="Invalid Input";
		}
	//} 
}



// Id validation
$phone_error_msg="";
function validatePhone($phone) {
	if(!preg_match("/^[+]{1}[0-9]{12}+$/",$phone)) {
		echo '<br><label style="color:red;">Invalid Input</label>';
		$phone_error_msg="Invalid Input";
	}
	
}
	$fname=$_REQUEST['fname'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$text=$_REQUEST['text1'];
	if(!preg_match("/^[+]{1}[0-9]{12}+$/",$phone)  || !preg_match("/^[a-z A-Z]+$/",$fname)) {
		echo '<div class="error"><strong>Error!</strong> contact not successfull.</div>';
	}
	else {

		$sql="INSERT INTO contact (fname, email, phone, description)  VALUES('$fname',   '$email', '$phone', '$text')";
	$result=mysqli_query($db, $sql);
	 if($result)
	{		
		echo '<div class="success"><strong>Success!</strong><w>Contact successfull.</div>';
}else{
	echo '<div style="color: red;" color class="error"><strong>Error! </strong><w>try again</div>';
}
}
	}
	?>
		