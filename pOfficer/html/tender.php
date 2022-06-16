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
                    <div class="pcoded-inner-content" style="overflow-x: scroll;">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-16">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5><div class="allusers">
        <h3 style="font-size: 18px;"><w>All tenders</h3>
   <!--  <?php include("");
    ?> -->
        <div class="search">
            <form action="account.php">
                <input type="text" name="search" placeholder="Search Users"><w><w><w><w><w><w><w>
                <input style="height: 36px; padding-right: 7px;cursor: pointer;" type="submit" name="searchbutton" value="Search">
            </form>
        </div>
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
                                                    <p>

                       <?php
		include ("../../config.php");
	$sql="SELECT * FROM new   ORDER BY start_date asc";
	$result=mysqli_query($db, $sql);
	$result1=mysqli_query($db, $sql);
	?>
	<div class="previewarea">
		<div class="tenderheader">
		<br>
		<label style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;font-size: 17px;color: #3b7db2; font-weight: bold;">All tenders appear here</label>
		
		<a style="background-color: #3A7CB1; margin-left: 400px; color: white; text-decoration: none; padding: 6px 5px 6px 5px;" href="newTender.php">Add new tender</a>
		</div>

		<div class="tender">
		<?php
			$count=0;
			while($row=mysqli_fetch_assoc($result) )
			{ 
				$count++;
				if ($row['status']==0) { ?>
				<div class="tender1">
					<a><?php echo $count.". "; ?><?php echo $row['title'];  ?> <i style="color: red; font-size: 18px;" class="fa fa-times-circle"> canceled</i></a>
					<p style="color: red;">Reason: <?php echo $row['reason'];  ?></p>
				</div>
				<?php }

				 else {
                    if ($row['class']==2){
			?>
			<div class="tender1">
                   <?php
                   

                   //	$_SESSION['tenderid']=$row["id"]
                   
                    ?>
                   
				<a href="tenderInfo.php? id=<?php echo $row['id']; ?>"><?php echo $count.". "; ?><?php echo $row['title'];  ?></a>
				<p>Category: <?php echo $row['category'];  ?></p>
				<p>Posted: <?php echo $row['start_date']; ?></p>
                <p>Initial Price: <?php echo $row['initial_price'];  ?></p>
			</div>
			<?php }
            if ($row['class']==1) {?>
                
            <div class="tender1">
                   <?php
                   

                   //   $_SESSION['tenderid']=$row["id"]
                   
                    ?>
                   
                <a href="tenderInfo.php? id=<?php echo $row['id']; ?>"><?php echo $count.". "; ?><?php echo $row['title'];  ?></a>
                <p>Category: <?php echo $row['category'];  ?></p>
                <p>Posted: <?php echo $row['start_date']; ?></p>
            </div>

            <?php }}}?>
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