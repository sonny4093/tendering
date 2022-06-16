
<!DOCTYPE html>
<html lang="en">
</style>
<head>
	<title>Online tendering</title>
	<meta charset='UTF-8'/>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="../css/newTender.css">
	<link rel="stylesheet" type="text/css" href="../../fontawesome-free-5.8.1-web/css/all.css">
   <!-- <script type="text/javascript" src="index/js/style.js"></script> -->
<style >
		.upper {
	background-color:#558abe;
	width: 100%;
	height:80px;
	margin-top: -100px;
	margin-left: -20px;
	position: fixed;
	margin-bottom: 20px;
}
.list{
	margin-top: -25px;
	display: inline-flex;
	float: right;
	margin-right: 15%;
	list-style-type: none;
}
.list a{
	padding: 10px;
	text-decoration: none;
	font-weight: bold;
    font-size: 15px;
    transition: all 0.3s ease;
	color: black;

}
.upper ul li{
	text-decoration: none;
	border-width: 10px;
}
.list {
	text-align: center;
}
	</style>
</head>
<body>
	
	<div class="upper" style="width: 100%;">
		  <div>
			<img src="../../img/logo.png" width="70" height="50" alt="" style="margin-top: 10px; margin-left: 22px;">
		   </div>
		  <div>
			<ul class="list"  style="margin-top: -25px;">
				<li><a href="../../index.php"><i class="fa fa-home"><w><w>Home</i></a> </li>
			  <li ><a href=""><span class="glyphicon glyphicon-user"></span>About Us</a></li>
			  <li ><a href=""><span class="glyphicon glyphicon-earphone"></span>
              </svg></i>Contact Us</a></li>
			  <li><a  href="../../logout.php">Logout</a>
</li>
		    </ul>
	      </div>
		<div class="label"  style="margin-left: 1050px; margin-top: -30px;">
			<label><a><span style="margin-left: -20px; font-size: 17px; background-color: red; color: white; border-radius: 50%;position: absolute;top: 12px; width: 20px; text-align: center; "></span></p><w><w></i></a></label>
				<?php
					include("../../config.php");
					session_start();
					$sql="SELECT * FROM user WHERE username='".$_SESSION['login_user']."'";
					$result=mysqli_query($db,$sql);
					$row=mysqli_fetch_assoc($result);
				?>

			<div class="name" style="color: black; margin-top: -50px;"><p><?php echo $row['fname']; ?></p></div>
		</div>
		<div class="select">
			<div class="dropdown">
		  	<button class="dropbtn" style="margin-left: 250px;margin-top:-45px;"><div class="i"><i class="fa fa-user"></i></div></button>
		  	
		</div>
		</div>

	</div>
	<div class="navigation" style="margin-top: 265px;">
		<div class="icon-bar">
			<a href="tender.php"><i class="fa fa-file"><w><w>Tender</i></a>
			<a href="profile.php"><i class="fa fa-user-circle"><w><w>Profile</i></a>
            <a  href="Setting.php"><i class="fa fa-cog"><w><w>Setting</i></a>
            <a  href="Feedback.php"><i class="fa fa-paper-plane"><w><w>Feedback</i></a>
            <a style="height: 60px;">Logout</a>
		</div>
		
	</div>

	<div class="previewarea">
	<?php
	include ("../../config.php");
		include ("../php/newTender.php");
		
		
	
	 ?>
		<div style="width: 400px;" class="employeeinfo">
		<li>Post tender advertisemnet </li>
		</div>
		
		<div class="form">
			
			<form name="form" action="newTender1.php" method="post">
				
				<div class="form1"><br>
				<?php 
 	$id=$_REQUEST['id'];
 
 		
 		 for ($j=1; $j <=$id ; $j++) {  ?>
 		 
 		 <select name="option" onchange="this.form.submit()">
 		 	<option value="<?php echo $j; ?>"><?php echo $j; ?></option>
 		 </select>	
        <?php			}
 	if (isset($_REQUEST['option'])) {
 	 for ($j=1; $j <=$_REQUEST['option'] ; $j++) { 
 	 //header("location: newTender2") ?> 
 		<input type="number" name="<?php echo "price"."".$j;?>" required placeholder="Title of tender"><br><br>
 	<?php } }
 	?>
					
					<input type="submit" name="next" value="next">
					</div>
					
					
			</form>

 
		</div>
	</div>


	<div>
	<?php
      require("../../footer.php");
	?>	
	</div>
</body>
</html>


