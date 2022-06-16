<!DOCTYPE html>
<html lang="en">

<head>
    <title>online tendering</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="../../img/logo.png" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="../../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  </head>

  <body themebg-pattern="theme1">
                    <section class="login-block">
        <!-- Container-fluid starts -->
         
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" action="login.php" method="post">
                            
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                    </div>
                                    <?php
        include ("../php/login.php");
        if (!empty($_POST['remember'])) {
            setcookie("username",$_POST['username'],time()+31536000);
            setcookie("password",$_POST['password'],time()+31536000);
         }
     ?><br>
                                    <div class="form-group form-primary">
                                        <input type="text" name="username" class="form-control" required=""value="<?php if (isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>" >
                                        <span class="form-bar"></span>
                                        <label class="float-label">Username</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="" value="<?php if (isset($_COOKIE['password'])) {echo $_COOKIE['password'];}  ?>">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">

                                                <input style="width: 25px; box-shadow: none; height: 15px;" type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])&&isset($_COOKIE['password'])) {
            echo 'checked="checked"';
        }
        else{
            echo '';
            } 
        ?> value="1">Remember Me 
                                           


                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <input class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" id="submit" type="submit" name="login" value="Login">
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p  class="text-inverse text-left">Don't have an account? <a href="register.php"><b style="color: #448aff;">Register</b></a></p>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="index.php"><b style="color: #448aff;">home</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

                    </div>
                </div>
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>

    <?php
   // require("link1.php");
    ?>
    <br><br><br>

</body>

</html>


