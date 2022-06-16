<?php
	include ("../../config.php");

if (isset($_REQUEST['save'])) { 

    $body=$_REQUEST['feedback'];
	$feedback=nl2br(htmlentities($body, ENT_QUOTES, 'UTF-8'));

	$sql1="SELECT * FROM user WHERE username='".$_SESSION['login_user']."'";
	$result1=mysqli_query($db,$sql1);
	while($row1=mysqli_fetch_assoc($result1)){
		$name=$row1['fname']." ".$row1['mname'];
		$user_id=$row1['id'];
	}

	$sql="INSERT INTO feedback (user_id, name, feedback) VALUES ('$user_id', '$name', '$feedback')";
	$result=mysqli_query($db, $sql);

//}
if ($result) {
		echo '<div class="success"><strong>Success ! </strong></w>Your feedback is successfully sent ! </w></div>';
	} 
	
}
	
	?>	
