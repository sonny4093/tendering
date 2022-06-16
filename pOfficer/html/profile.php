
<?php
session_start();
if (isset($_SESSION['login_user'])) {
?>
<!DOCTYPE html>
<html lang="en">
<?php
require("link.php");
?>
<link rel="stylesheet" type="text/css" href="../..fOfficer/css/profile.css">
<style type="text/css">
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
<div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-lg-10" style="overflow-x: scroll;">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5><div class="allusers">
        <h3 style="font-size: 18px;"><w>Visit Profile</h3>
   <!--  <?php //include("");
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
                    include("../../config.php");
                    $sql="SELECT * FROM user WHERE username='".$_SESSION['login_user']."'";
                    $result=mysqli_query($db,$sql);
                    $row=mysqli_fetch_assoc($result);
                ?>
<?php
        include ("../php/profile.php");
     ?>
        <div class="employeeinfo">
            <li>Profile</li>
        </div>
        <div class="profile">
            <div style="width: 150px; height: 150px; background-image: url('../../img/background5.jpg');  margin-top: 30px; margin-left: 22px; border-radius: 100%; ">
                <i style="font-size: 110px; margin-left: -3px; margin-top: 10px; border-radius: 100px; color: white;" class="fa fa-user"></i>
            </div>
            <div style=" text-align: center; min-width: 242px; margin-left: -21px;  margin-top:1px; ">
                <p style="text-align: center; color: white;"><?php echo $row['fname']." ".$row['mname']; ?></p>
                <p style="text-align: center; font-size: 14px; color: white;"><?php echo $row['email']; ?></p>
                <p style="text-align: center; color: white;"><?php echo $row['phone']; ?></p>
            </div>
            
        </div>
        <div class="form">
            <form action="profile.php" method="post">
                    
                <div class="form1"><br>
                        
                    <label>Name </label><br>
                    <input readonly  type="text" value="<?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?>"><br><br>
                    <label>Sex </label><br>
                    <input readonly type="text" value="<?php echo $row['sex']; ?>"><br><br>
                    <label>ID </label><br>
                    <input readonly type="text" value="<?php echo $row['id']; ?>"><br><br>
                    <label>Email </label><br>
                    <input readonly type="text" value="<?php echo $row['email']; ?>"><br><br>
                    
                    
                </div>
                <div class="form2"><br>
                    <label>Phone </label><br>   
                    <input readonly  type="text" value="<?php echo $row['phone']; ?>"><br><br>
                    <label>Role </label><br>    
                    <input readonly  type="text" value="<?php echo $row['role']; ?>"><br><br>
                    <label>Username </label><br>
                    <input readonly type="text" value="<?php echo $row['username']; ?>"><br><br>
                    <label>Password </label><br>
                    <input readonly type="text" value="<?php echo $row['password']; ?>"><br><br><br>    
                    
                    
                </div>  
                    
            </form>
            
        </div>
    </div>


    <div >

                                                        


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