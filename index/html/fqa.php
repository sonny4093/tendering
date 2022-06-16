
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
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        	<div class="col-lg-10">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">FAQ</h5>
                                                    </div>
                                                    <img src="../../img/faq.png">
                                                    <div class="card-block accordion-block">
                                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                                            <div class="accordion-panel">
                                                                <div class="accordion-heading" role="tab" id="headingOne">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapseOne"
                                                                        aria-expanded="true" aria-controls="collapseOne">
                                                                        How do I subscribe ?
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="accordion-content accordion-desc">
                                                                    <p>
                                                                        Subscription is easier than you think. Click on register menu located at the left of the screen and subscription form will display. A form will appear on which you have to fill out your personal and contact information. Click on “submit”. Then you can do the system operations and you can enjoy benefit of DBU-Tender.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-panel">
                                                            <div class="accordion-heading" role="tab" id="headingTwo">
                                                                <h3 class="card-title accordion-title">
                                                                    <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    How do I Login after subscription ?
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="accordion-content accordion-desc">
                                                                <p>
                                                                    Login is very easy like subscription. After you registered successfully click the login form is located at the right of the screen and then you can enter your username and password and click login button. After that you can enjoy benefit of DBU-Tender.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-panel">
                                                        <div class=" accordion-heading" role="tab" id="headingThree">
                                                            <h3 class="card-title accordion-title">
                                                                <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseThree"
                                                                aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                How can I get tender advertisements ?
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="accordion-content accordion-desc">
                                                            <p>
                                                                After you successfully subscribe and login. The tender link is appear on the left of screen inside the navigation menu. So you can click the tender link and you can view the tender list after that you can click the tender you need. after that the system displays details of that tender.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-panel">
                                                        <div class=" accordion-heading" role="tab" id="headingFour">
                                                            <h3 class="card-title accordion-title">
                                                                <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseFour"
                                                                aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                How Can I get tender document ?
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="accordion-content accordion-desc">
                                                            <p>
                                                                After successfully subscribe and login. Choose the tender you need and view details of the tender. After that the system display links. you can click download tender document link. then the system display payment page. after that you have to pay payement online to the company account. finally you can got the document
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-panel">
                                                        <div class=" accordion-heading" role="tab" id="headingFive">
                                                            <h3 class="card-title accordion-title">
                                                                <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseFive"
                                                                aria-expanded="false"
                                                                aria-controls="collapseFive">
                                                                How can I apply on a tender ?
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                        <div class="accordion-content accordion-desc">
                                                            <p>
                                                                First you have to buy tender document. After you download tender document you should fulfill the requiremnents and you can send the document to apply bid.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-panel">
                                                        <div class=" accordion-heading" role="tab" id="headingSix">
                                                            <h3 class="card-title accordion-title">
                                                                <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseSix"
                                                                aria-expanded="false"
                                                                aria-controls="collapseSix">
                                                               How can I see the tender result?
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                        <div class="accordion-content accordion-desc">
                                                            <p>
                                                               First you have to buy tender document. After you download tender document you should fulfill the requiremnents and you can apply bid. after that you have to wait until the tender is closed. after the closing time you can see the result and finally you can see the winner of the tender
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
                                </div>
                            </div>
                        </div>
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


