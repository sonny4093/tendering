 
<style type="text/css">
    text-reset{
        height: 40px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<?php
require("link.php");
?>

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
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5><div class="allusers">
        <h3 style="font-size: 18px;"><w>Contact Us</h3>
   <?php include("../php/contactus.php");
    ?> 
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
                                                        <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <form>
                                                                                <img style="width: 400px;" src="../../img/contactus.png">

                                                                            </form>
                                                                        </div>
   <div class="col-sm-6 mobile-inputs">
                                                                            <h4 class="sub-title">fill the field</h4>
                                                                            <form action="contactus.php" method="POST">
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                    class="form-control form-control-primary" name="fname" 
                                                                                    placeholder="full name" required=""><?php if (isset($_REQUEST['send'])) {
                                                                                    validateName('fname');
                                                                                    } ?>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input  type="text" name="phone" 
                                                                                        class="form-control form-control-primary"
                                                                                        placeholder="phone" required="">
                                                                                        <?php if (isset($_REQUEST['send'])) {
                                                                                    validatePhone('phone');
                                                                                    } ?>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="email" name="email" 
                                                                                        class="form-control form-control-primary"
                                                                                        placeholder="Email" required="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-12">
                                                                                        <textarea name="text1"  style="height: 150px" required="" class="form-control form-control-primary"
                                                                                        placeholder="Write everything you think"></textarea><br><br>
                                                                                        <input style="background-color: #448aff;" type="submit" class="btn btn control-group button-primary " name="send" value="send">
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div><br><br><br>
      <a href="" class="me-4 text-reset">
        <i class="ti-facebook"></i>
      </a>
      <a href="" class="col-lg-6" class="me-4 text-reset" >
        <i class="ti-twitter"></i>
      </a>
      <a href=""class="col-lg-8" class="me-4 text-reset">
        <i class="ti-instagram"></i>
      </a>
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
                    <?php require("footer.php");?>
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

 