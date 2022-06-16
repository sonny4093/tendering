
<?php
session_start();
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
                                                    <p>

                                                    	<div class="employee">
	<h3 style="width: 740px;
height: 65px;
text-align: center;
background-color: #fafafa;
border-color: #f0f0f0;
border-style: solid;
border-width: 1px;
box-shadow: 0 0px 5px #ededed;
border-radius: 5px;
padding-top: 15px;
margin-left: 17px;
margin-top: 25px;"><w>All Bidders</h3>
	<div style="display: none;" class="search">
		<form action="request.php" method="post">
			<input type="text" name="search" placeholder="Search Users"><w><w><w><w><w><w><w>
		    <input style="height: 36px; margin-top:; padding-right: 7px;cursor: pointer;" type="submit" name="searchbutton" value="Search">
		</form>
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







<!DOCTYPE html>
<html lang="en">
</style>
<head>
	<title>Online tendering</title>
	<meta charset='UTF-8'/>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="../css/bidder.css">
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
		<div class="label"  style="margin-left: 1050px; margin-top: -40px;">
			<label><a ><span style="margin-left: -20px; font-size: 17px; background-color: red; color: white; border-radius: 50%;position: absolute;top: 12px; width: 20px; text-align: center; "></span></p><w><w></i></a></label>
				<?php

					include("../../config.php");
					session_start();
					$sql="SELECT * FROM user WHERE username='".$_SESSION['login_user']."'";
					$result=mysqli_query($db,$sql);
					$row=mysqli_fetch_assoc($result);
				?>

			<div class="name" style="color: black; margin-top: -100px;"><p><?php echo $row['fname']; ?></p></div>
		</div>
		<div class="select">
			<div class="dropdown">
		  	<button class="dropbtn" style="margin-left: 250px;margin-top: -30px;"><div class="i"><i class="fa fa-user"></i></div></button>
		  	<div class="dropdown-content">
			    <a href="viewProfile.php"><w><i class="fa fa-user"></i><w> View Profile</a>
			    <a href="changePassword.php"><w><i class="fa fa-key"></i><w>Change Password</a>
			    <a href="../../Logout.php"><w><i class="fa fa-power-off"></i><w>Logout</a>
	  		</div>
		</div>
		</div>

	</div>
	<div class="navigation"style="margin-top: 210px;">
		<div class="icon-bar">
			<a href="tender.php"><i class="fa fa-file"><w><w>Tender</i></a>
			<a href="profile.php"><i class="fa fa-user-circle"><w><w>Profile</i></a>
            <a  href="Setting.php"><i class="fa fa-cog"><w><w>Setting</i></a>
            <a  href="Feedback.php"><i class="fa fa-paper-plane"><w><w>Feedback</i></a>
            <a style="height: 60px;" href=""></a>
		</div>
	</div>
	<div class="employee">
	<h3 style="width: 740px;
height: 65px;
text-align: center;
background-color: #fafafa;
border-color: #f0f0f0;
border-style: solid;
border-width: 1px;
box-shadow: 0 0px 5px #ededed;
border-radius: 5px;
padding-top: 15px;
margin-left: 17px;
margin-top: 25px;"><w>All Bidders</h3>
	<div style="display: none;" class="search">
		<form action="request.php" method="post">
			<input type="text" name="search" placeholder="Search Users"><w><w><w><w><w><w><w>
		    <input style="height: 36px; margin-top:; padding-right: 7px;cursor: pointer;" type="submit" name="searchbutton" value="Search">
		</form>
	</div>
	

		<?php

			include("../php/bidder.php");

		?>
		</table>
	</div>
		
		
	</div>
	<div>
	<?php
       require("../../footer.php");
	?>	
	</div>
</body>
</html>