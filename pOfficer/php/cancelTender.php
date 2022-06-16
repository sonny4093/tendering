<?php
	include ("../../config.php");

if (isset($_REQUEST['save'])) { 
    $id=$_REQUEST['id'];
    $body=$_REQUEST['reason'];
	$reason=nl2br(htmlentities($body, ENT_QUOTES, 'UTF-8'));


	$sql="UPDATE new set reason='$reason', status=0 WHERE id='$id'";
	$result=mysqli_query($db, $sql);

//}
if ($result) {
		echo '<div class="success"><strong>Tender is successfully canceled !</strong> </div>';
	} 
	
}
	
	?>	
