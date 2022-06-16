

<!DOCTYPE html>
<html lang="en">
<?php
require("link.php");
?>
<!-- <link rel="stylesheet" type="text/css" href="../../admin/css/massage.css"> -->

<body>
<!-- Pre-loader start -->
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <?php
        require("header.php");
        ?>
    
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
                    
                    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="col-lg-18" class="container-fluid">
            <div  class="row" >
                <div class="col-md-12">
                    <form action="register.php" method="post" class="md-float-material form-material" >
                        
                        <div class="auth-box card"  >
                            <div  class="card-block" >
                                <div class="row m-b-20">
                                    <div class="col-lg-10">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <?php 
                               include ("../php/register.php");

                                  ?><br>
                                <div class="form-group form-primary">
                                    <h5 class="sub-title">Company Information</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="company_name" class="form-control" required=""><?php if(isset($_REQUEST['submit'])){ 
                         validateName($_REQUEST['company_name']); }?>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Company Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="address" class="form-control" required=""><?php if(isset($_REQUEST['submit'])){ 
                         validateName($_REQUEST['address']); }?>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Address</label>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group form-primary">
                                    <h5 class="sub-title">Personal Information</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="fname" class="form-control" required=""><?php if(isset($_REQUEST['submit'])){ 
                         validateName($_REQUEST['fname']); }?>
                                            <span class="form-bar"></span>
                                            <label class="float-label">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="mname" class="form-control" required=""><?php if(isset($_REQUEST['submit'])){ 
                         validateName($_REQUEST['mname']); }?>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Middle Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="lname" class="form-control" required=""><?php if(isset($_REQUEST['submit'])){ 
                         validateName($_REQUEST['lname']); }?>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="email" name="email" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="username" class="form-control" required=""><?php if(isset($_REQUEST['submit'])){ 
                         validateName($_REQUEST['company_name']); }?>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="phone" class="form-control" required="" value="+251"><?php if(isset($_REQUEST['submit'])){ 
                         validatePhone($_REQUEST['phone']); }?>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Telephone</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <label>Gender</label><br>
                        <input style=" width: 30px; height: 20px;" required type="radio" name="sex" value="Male" checked>Male<w><w><w><w>
                        <input style="width: 30px; height: 20px;"  type="radio" required name="sex" value="Female">Female<br><br> 
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control" required="" minlength="4">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="confirm" class="form-control" required="" minlength="4">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            
                                        </div>
                                    </div>
                                </div>
                                 <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" type="submit" name="submit" value="Submit">
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <?php require("footer.php");?>
                    </div>
                </div>
                <div id="styleSelector">
                
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



