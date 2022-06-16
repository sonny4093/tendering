<?php
/*$sql1="SELECT  MAX(class) as class FROM tender";
$result2=mysqli_query($db,$sql1);
$length=mysqli_num_rows($result2);
$row2=mysqli_fetch_assoc($result2);
	$class=$row2['class'];
		$class++;
		*/
	include("../../config.php");
if (isset($_REQUEST['submit'])) {
	$item=$_REQUEST['item'];
	$category=$_REQUEST['category'];
	$body=$_REQUEST['description'];
	$closing_date=$_REQUEST['closing_date'];
	$opening_date=$_REQUEST['opening_date'];
	$start_date=$_REQUEST['opening_date'];
		$currenttime=strtotime(' now ');
	if ((strtotime($closing_date)<=$currenttime)) {
		echo '<div class="error"><strong>Error!</strong><w>Closing date is incorrect.</div>';
		
	}
	elseif (strtotime($closing_date)<$opening_date) {
		echo '<div class="error"><strong>Error!</strong><w>Closing date must after opening daet.</div>';
	}
	elseif ((strtotime($opening_date)>=strtotime($closing_date))  ) {
		echo '<div class="error"><strong>Error!</strong><w>Opening date must before closing date.</div>';
	}
	elseif ((strtotime($opening_date)<$currenttime)) {
		echo '<div class="error"><strong>Error!</strong><w>opening date is incorrect.</div>';
	}
	elseif ($category==-1) {
		echo '<div class="error"><strong>Error!</strong><w>Please select the category.</div>';
	}

else{
	$class=1;

    $sql="INSERT INTO new (class, title, start_date, opening_date, closing_date, description, category)  VALUES('$class','$item', '$start_date', '$opening_date', '$closing_date', '$body', '$category')";
		$result=mysqli_query($db, $sql);
	if($result)
	{		
		echo '<div class="success"><strong>Success!</strong><w>Tender advertisement posted successfully.</div>';

}else {
	echo '<div class="error"><strong>Wrong!</strong><w>Tender Posting fail.</div>';
}}

}/*
else{
	$currenttime=strtotime(' now ');
	if ((strtotime($closing_date)<=$currenttime) && (strtotime($closing_date)<=$opening_date)) {
		echo '<div class="error"><strong>Error!</strong><w>Invalid closing date.</div>';
		$result="";
		$sql="";
		
	}
	if (strtotime($opening_date)>=strtotime($closing_date)) {
		echo '<div class="error"><strong>Error!</strong><w>Opening date must before closing date.</div>';
		$result="";
		$sql="";
		
	}
	//else
	// if (!is_numeric($price)) {
	// 	echo '<div class="error"><strong>Error!</strong><w>Price must have number value.</div>';
	// }
	if ($price<=0 && $price!=0) {
		echo '<div class="error"><strong>Error!</strong><w>Price have not negative value or 0.</div>';
		$result="";
		$sql="";
		
	}
	
	}
	}*/ 
	/*$sql1="SELECT  MAX(class) as class FROM tender";
$result2=mysqli_query($db,$sql1);
$length=mysqli_num_rows($result2);
$row2=mysqli_fetch_assoc($result2);
	$class=$row2['class'];
		$class++;
		*/
if (isset($_REQUEST['post'])) {
	$price=$_REQUEST['initial_price'];
	$item=$_REQUEST['item'];
	$category=$_REQUEST['category'];
	$body=$_REQUEST['description'];
	$closing_date=$_REQUEST['closing_date'];
	$opening_date=$_REQUEST['opening_date'];
	$start_date=$_REQUEST['opening_date'];
		$currenttime=strtotime(' now ');
	if ((strtotime($closing_date)<=$currenttime)) {
		echo '<div class="error"><strong>Error!</strong><w>Closing date is incorrect.</div>';
		
	}
	elseif (strtotime($closing_date)<$opening_date) {
		echo '<div class="error"><strong>Error!</strong><w>Closing date must after opening daet.</div>';
	}
	elseif ((strtotime($opening_date)>=strtotime($closing_date))  ) {
		echo '<div class="error"><strong>Error!</strong><w>Opening date must before closing date.</div>';
	}
	elseif ((strtotime($opening_date)<$currenttime)) {
		echo '<div class="error"><strong>Error!</strong><w>opening date is incorrect.</div>';
	}
	elseif ($category==-1) {
		echo '<div class="error"><strong>Error!</strong><w>Please select the category.</div>';
	}

else{
	$class=2;

    $sql="INSERT INTO new (class, title, start_date, opening_date, closing_date, description, category, initial_price)  VALUES('$class' ,'$item', '$start_date', '$opening_date', '$closing_date', '$body', '$category', '$price')";
		$result=mysqli_query($db, $sql);
	if($result)
	{		
		echo '<div class="success"><strong>Success!</strong><w>Tender advertisement posted successfully.</div>';

}else {
	echo '<div class="error"><strong>Wrong!</strong><w>Tender Posting fail.</div>';
}}

}/*
else{
	$currenttime=strtotime(' now ');
	if ((strtotime($closing_date)<=$currenttime) && (strtotime($closing_date)<=$opening_date)) {
		echo '<div class="error"><strong>Error!</strong><w>Invalid closing date.</div>';
		$result="";
		$sql="";
		
	}
	if (strtotime($opening_date)>=strtotime($closing_date)) {
		echo '<div class="error"><strong>Error!</strong><w>Opening date must before closing date.</div>';
		$result="";
		$sql="";
		
	}
	//else
	// if (!is_numeric($price)) {
	// 	echo '<div class="error"><strong>Error!</strong><w>Price must have number value.</div>';
	// }
	if ($price<=0 && $price!=0) {
		echo '<div class="error"><strong>Error!</strong><w>Price have not negative value or 0.</div>';
		$result="";
		$sql="";
		
	}
	
	}
	}*/ 

	?>	
