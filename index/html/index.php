

<!DOCTYPE html>
<html lang="en">
<?php
require("link.php");
?>
<style type="text/css">
        
    .previewarea {
    
    text-align: center;
    
    background-color: white
}
.tender {
    
    
    height: auto;
    text-align: left;
    margin-top: 20px;
}
.tender a {
    color: #3a7cb1;
    font-weight: bold;
    font-size: 13px;
}
.tender p {
    color: #333333;
    font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
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
        <h3 style="font-size: 18px;"><w>All tenders</h3>
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

                       <?php
		include ("../../config.php");
	$sql="SELECT * FROM new   ORDER BY start_date desc";
	$result=mysqli_query($db, $sql);
	$result1=mysqli_query($db, $sql);
	?>
	<div class="previewarea">
		<div class="tenderheader">
		<br>
		<label style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;font-size: 17px;color: #3b7db2; font-weight: bold;">All tenders appear here</label>
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
                 if ($row['class']==2) {
            ?>
            <div class="tender1">
                  
                <a href="tenderInfo.php? id=<?php echo $row['id']; ?>"><?php echo $count.". "; ?><?php echo $row['title'];  ?></a>
                <p>Category: <?php echo $row['category'];  ?></p>
                <p>Posted: <?php echo $row['start_date']; ?></p>
                <p>Initial Price: <?php echo $row['initial_price']; ?></p>

            </div>
            <?php }
            else if ($row['class']==1){?>

                <div class="tender1">
                  
                <a href="tenderInfo.php? id=<?php echo $row['id']; ?>"><?php echo $count.". "; ?><?php echo $row['title'];  ?></a>
                <p>Category: <?php echo $row['category'];  ?></p>
                <p>Posted: <?php echo $row['start_date']; ?></p>

            </div>
          <?php  }


             }?>
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