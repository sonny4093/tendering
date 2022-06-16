


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
		<div style=" margin-top: 14px;">
		<?php	
			$row=mysqli_fetch_assoc($result);

			 ?>
				<u style="float: right;"><?php echo $row['start_date']; ?></u>
		</div>
		<h3 style="text-align: center;" ><u>Tender notice</u></h3>
		
		</div>

		<div class="tender">
		
			<div class="tender1">

		<p style="font-weight: bold; font-size: 14px;"><?php echo $row['title'];  ?></p>
				<p style="font-size: 13px; white-space: normal;"><?php echo $row['description'];  ?></p>
		
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

