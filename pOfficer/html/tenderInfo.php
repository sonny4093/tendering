<?php
session_start();
if (isset($_SESSION['login_user'])) {
?>
<!DOCTYPE html>
<html lang="en">
<?php
require("link.php");
?>
<!-- <link rel="stylesheet" type="text/css" href="../css/tender.css"> -->
<style type="text/css">
	
	
.previewarea {
	
	text-align: center;
	
	background-color: white
}
.tenderheader {
	//width: 777px;
	height: 65px;
	text-align: left;
	background-color: #fafafa;
	border-color: #f0f0f0;
	border-style: solid;
	border-width: 1px;
	box-shadow: 0 0px 5px #ededed;
	border-radius: 5px;
	/*margin-left: 71px;
	margin-top: 95px;*/

}
.tender {
	/*margin-left: 68px;*/
	width: 777px;
	height: auto;
	text-align: left;
	/*margin-top: 20px;*/

}
.tender a {
	color: #3a7cb1;
	font-weight: bold;
	font-size: 13px;
}
.tender p {
	color: #333333;
	//font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.tender1:hover {
	background-color: #fafafa;
}

</style>
<body>
<!-- Pre-loader start -->
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        <!-- <?php
        //require("header.php");
        ?> -->


        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <div class="mobile-search waves-effect waves-light">
                        <div class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="index.html">
                         <img class="" style="width:50px; height: 35px;" src="../../img/logo.png" alt="DBU logo">Tendering
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="ti-more"></i>
                    </a>
                </div>
            
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a href="#!" class="waves-effect waves-light">
                                <img src="../../assets/images/faq_man.png" class="img-radius" alt="User-Profile-Image">

                                <?php
                                // require("../../config.php");
                                // $sql="SELECT * from user where username='".$_SESSION['login']."'";
                                // $result=mysqli_query($db,$sql);
                                // $row=mysqli_fetch_assoc($result);
                                $_SESSION['login1']=$_SESSION['login_user'];

                                ?> 

                                <span><?php echo $_SESSION['login1'] ?></span>

                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li class="waves-effect waves-light">
                                    <a href="setting.php">
                                        <i class="ti-settings"></i>Settings
                                    </a>
                                </li>
                                <li class="waves-effect waves-light">
                                    <a href="profile.php">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                <!-- <li class="waves-effect waves-light">
                                    <a href="email-inbox.html">
                                        <i class="ti-email"></i> My Messages
                                    </a>
                                </li> -->
                                <!-- <li class="waves-effect waves-light">
                                    <a href="../../auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li> -->
                                <li class="waves-effect waves-light">
                                    <a href="../../logout.php">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <?php
                require("sidebar.php");
                ?>
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <?php
                      require("dashbord.php");
                    ?>
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content" >
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5><div class="allusers">
        <h3 style="font-size: 18px;"><w>Tender Information</h3>
   <!--  <?php include("");
    ?> -->
    </div></h5>
                                                    
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="fa fa-chevron-left"></i></li>
                                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                                            <li><i class="fa fa-times close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <p><?php
		include ("../../config.php");
		$id=$_REQUEST['id'];
		//$id=$_SESSION['tenderid'];

	$sql="SELECT *FROM new WHERE id='$id' ";
	$result=mysqli_query($db, $sql);
	?>
	<div class="previewarea">
		<div class="tenderheader">	
		<div style="margin-left: 600px; margin-top: 14px;">
		<?php	
			$row=mysqli_fetch_assoc($result);

			 ?>
				<u><?php echo $row['start_date']; ?></u>
		</div>
		<h3 style="text-align: center;" ><u>Tender notice</u></h3>
		
		</div>

		<div class="tender">
		
			<div class="tender1">

		<p style="font-weight: bold; font-size: 14px;"><?php echo $row['title'];  ?></p>
				<p style="font-size: 13px; white-space: normal;"><?php echo $row['description'];  ?></p>
		<!-- <w><w><w><w><strong>NB. ጨረታው በ <?php $c_date=$row['closing_date']; //echo date(' m/d/Y h:i a', strtotime($c_date));  ?> ታሽጎ በ <?php $o_date=$row['closing_date']; //echo date(' m/d/Y h:i a', strtotime($o_date));  ?> ይከፈታል።</strong><br><br> -->

		<div class="operation">
			<a class="document" href="tenderDocument.php?id=<?php echo $row['id']; ?>"><i class="fa fa-upload"></i> Upload tender document</a><br><br>
			<!--<a  style="background-color: none; color: #3c763d; padding: 4px 4px 4px 0px; border-radius: 3px;" class="documentupload"><i class="fa fa-check-circle"></i> Tender document uploaded</a><br>-->
			<a class="cancel" href="cancelTender.php?id=<?php echo $row['id']; ?>"><i class="fa fa-times-circle"></i> Cancel tender </a><br><br>
			<a href="bidder.php"></a>
			
			<a href="bidder.php?id=<?php echo $_SESSION['tenderid']; ?>"><i class="fa fa-user"></i> Bidders </a><br><br>
			<!--<a href="complaint.php?id=<?php echo $row["class"]; ?>"><i class="fa fa-comments"></i> Complaints </a><br>
			<a href="comittee.php?id=<?php echo $row["class"]; ?>"><i class="fa fa-user"></i> Comittees </a><br>
		-->
			<a class="date"  href="extendDate.php?id=<?php echo $row['id']; ?>"><i class="fa fa-expand"></i> Extend closing and opening date </a><br>
			<a href="result.php?id=<?php echo $row["class"]; ?>"><i class="fa fa-comments"></i> Result </a><br>
			<!-- <a href="comittee.php?id=<?php echo $row["class"]; ?>"><i class="fa fa-user"></i> Comittees </a><br> -->
		
		<!--
			<?php	
			$sql_lot="SELECT * FROM tender WHERE  status=1 AND class='$id'";
			$result_lot=mysqli_query($db, $sql_lot);
			$i=0;
			while ($row_lot=mysqli_fetch_assoc($result_lot)) { $i++; ?>
			<a style="background-color: none; color: #3c763d; padding: 4px 4px 4px 0px; border-radius: 3px;" class="opened"><i class="fa fa-check-circle"></i><?php echo " Lot"." ".$row_lot['lot']; ?> is opened </a><br>
			<style type="text/css">
				.date {
					display: none;
				}
			</style>
			<a  class="<?php echo "result"."".$i; ?>" href="result.php?id=<?php echo $row["class"]; ?>"><i class="fa fa-list-alt"></i> Result  </a><br>
			

			<style type="text/css">
				.cancel, .date {
					display: none;
				}
			</style>

			<?php	}  

				for ($j=$i-1; $j >= 1; $j--) { ?>
					<style type="text/css">
				.<?php echo "result"."".$j; ?> {
					display: none;
				}
			</style>
				<?php } 
			  

			$sql_closed="SELECT * FROM tender WHERE  status=2 AND class='$id'";
			$result_closed=mysqli_query($db, $sql_closed);
			while ($row_closed=mysqli_fetch_assoc($result_closed)) { ?>
			<a style="background-color: none; color: #3c763d; padding: 4px 4px 4px 0px; border-radius: 3px;" class="closed"><i class="fa fa-check-circle"></i><?php echo " Lot"." ".$row_closed['lot']; ?> is closed </a><br>
				<style type="text/css">
					.cancel, .date {
						display: none;
					}
				</style>

			<?php	}  

			$sql_closed="SELECT * FROM tender WHERE  finishing=1 AND class='$id'";
			$result_closed=mysqli_query($db, $sql_closed);
			$n=0;
			while($row_closed=mysqli_fetch_assoc($result_closed)) { $n++; ?>
			<a style="background-color: none; color: #3c763d; padding: 4px 4px 4px 0px; border-radius: 3px;" class="<?php echo "finished"."".$n; ?>"><i class="fa fa-check-circle"></i>Tender is finished </a><br>
			
			<style type="text/css">
				.cancel, .date {
					display: none;
				}
			</style>

			<?php	
			for ($k=$n-1; $k >= 1; $k--) { ?>
					<style type="text/css">
				.<?php echo "report"."".$k; ?> {
					display: none;
				}
				.<?php echo "finished"."".$k; ?> {
					display: none;
				}
				.opened, .closed, .date{
					display: none;
				}
			</style>
				<?php 
			}
			}
			 	$sql4="SELECT * FROM tender WHERE class=$id";
				$result4=mysqli_query($db, $sql4);
				while ($row4=mysqli_fetch_assoc($result4)) {

					if ($row4['upload']==0) {
					echo '<style type="text/css">
				 	.document {
				 		display:inline;
				 		
				 	}
				 	 .documentupload   {
				 		display:none;
				 	
				 	}
				 	
				 	
				 	</style>';
				}

				else if ($row4['upload']==1) {
					echo '<style type="text/css">
				 	 .documentupload {
				 		display:inline;
				 		
				 	}
				 	  .document{
				 		display:none;
				 	
				 	}
				 	
				 	
				 	</style>';
				}
				
				// else if ($row4['status']==2) {
				// 	echo '<style type="text/css">
				//  	.closed, opened {
				//  		display:inline;
				 		
				//  	}
				//  	.finished, .document, .documentupload, .result, .report {
				//  		display:none;
				 	
				//  	}
				 	
				//  	</style>';
				// }
				else if ($row4['finishing']==1) {
					echo '<style type="text/css">
				 	.finished, .result, .report {
				 		display:inline;
				 		
				 	}
				 	.opened, .opened, .closed, .cancel, .document, .documentupload {
				 		display:none;
				 	
				 	}
				 	
				 	</style>';
				}
								}		?>
				<div class="times">
			 <?php
			$currentTime = strtotime(' now ');
			$sql_open="SELECT * FROM tender WHERE class='$id'";
			$result_open=mysqli_query($db, $sql_open);
			while($row_open=mysqli_fetch_assoc($result_open)){	
				$lot=$row_open['lot'];		
				
			 if ($row_open['status']==0) {?> 
				<br><i></i><label style="color: red"><?php echo " Lot ".$row_open['lot']." ("; ?>
				<?php

				$time_elapsed 	= strtotime($row_open['closing_date'])-$currentTime;
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
$weeks 		= round($time_elapsed / 604800);
$months 	= round($time_elapsed / 2600640 );
$years 		= round($time_elapsed / 31207680 );

if($seconds <= 60){
	echo "$seconds seconds left";
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		echo "one minute left";
	}
	else{
		echo "$minutes minutes left";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		echo "an hour left";
	}else{
		echo "$hours hours left";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		echo "1 days left";
	}else{
		echo "$days days left";
	}
}
//Weeks
else if($weeks <= 4.3){
	if($weeks==1){
		echo "a week left";
	}else{
		echo "$weeks weeks left";
	}
}
//Months
else if($months <=12){
	if($months==1){
		echo "a month left";
	}else{
		echo "$months months left";
	}
}
//Years
else{
	if($years==1){
		echo "one year left";
	}else{
		echo "$years years left";
	}
	
}
echo " )</label>";
				?>
</div>


				
			
			<?php }
				if($currentTime>=strtotime($row_open['closing_date'])&&$currentTime<=strtotime($row_open['opening_date'])){ 
			 	$sql_close_status="UPDATE tender set status='2' WHERE lot='$lot'";
			 	$result_close_status=mysqli_query($db, $sql_close_status);
			 }
			 	if($currentTime>=strtotime($row_open['opening_date'])){ 
			 	$sql_open_status="UPDATE tender set status='1' WHERE lot='$lot'";
			 	$result_open_status=mysqli_query($db, $sql_open_status);
			 }
	
			
			 }

			?>
			 <?php

		 /*echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("M");*/
?> -->
		</div>
				
		</div>
	</div>


                                                        


                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
    <?php
    require("link1.php");
    ?>
</body>
</html>
 <?php
}
else{
    header("location: ../../index/html/login.php");
}
?> 