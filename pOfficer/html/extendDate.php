<?php
session_start();
if (isset($_SESSION['login_user'])) {
include ("../../config.php");
$id=$_REQUEST['id'];
$sql="SELECT * FROM new WHERE id='$id'";
$result1=mysqli_query($db,$sql);
$row1=mysqli_fetch_assoc($result1);

?>
<!DOCTYPE html>
<html lang="en">
<?php
require("link.php");
?>
<link rel="stylesheet" type="text/css" href="../../admin/css/massage.css">
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
        <h3 style="font-size: 18px;"><w>Extend Opening and Closing Date</h3>
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
                                                    <p>

                                                    	<div class="previewarea">
	 <?php
		include ("../php/extendDate.php");
	 ?>
		<div class="form">
			<form action="extendDate.php" method="post" enctype="multipart/form-data">
					<div class="form1"><br>
						<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
						<div class="form-group form-default">
                                                    	        	<label style="float: left;" class="float-label">Opening date</label>
                                                               <input class="form-control" type="datetime-local" required name="opening_date"required >
                                                                <span class="form-bar"></span>
                                                                
                                                            </div>
                                                            <div class="form-group form-default">
                                                    	        	<label style="float: left;" class="float-label">Closing date</label>
                                                               <input class="form-control" type="datetime-local" required name="closing_date" required >
                                                                <span class="form-bar"></span>
                                                                
                                                            </div>
						<input class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" id="submit" type="submit" name="save" value="Submit"><w><w><w>
						<input style="height: 30px;" id="cancel" type="reset" name="cancel" value="Cancel"><br><br><br><br><br><br>
					</div>	
					
			</form>
			
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