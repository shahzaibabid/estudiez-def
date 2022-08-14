<?php
    include("auth/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiez-Feedback</title>
<!--Fav icon -->
<link rel="icon" type="icon" href="images/logo.png">
<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="css/javascript-plugins-bundle.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="js/menuzord/css/menuzord.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>

<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/javascript-plugins-bundle.js"></script>
<script src="js/menuzord/js/menuzord.js"></script>

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/rs6.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/extra-rev-slider1.css">
<!-- REVOLUTION LAYERS STYLES -->
<!-- REVOLUTION JS FILES -->
<script src="js/revolution-slider/js/revolution.tools.min.js"></script>
<script src="js/revolution-slider/js/rs6.min.js"></script>
<script src="js/revolution-slider/extra-rev-slider1.js"></script>
</head>
<style>
    .active-nav-4{
        background-color: #FF9800;
        /* border-radius: 3px;
        color:pink;         */
    }
</style>
<body>
<!-- header -->
 <?php
 include_once('header.php');
 ?>
<!-- header -->
<!-- main content -->
<!-- banner image -->
    <section class="page-title divider layer-overlay overlay-dark-5 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg3.jpg">
            <div class="container pt-90 pb-90">
            
                <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                    <h2 class="title text-white">Feedback Form</h2>
                    <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                        <div class="breadcrumbs">
                        <span class="trail-item trail-begin">
                            <a href="#"><span>Home</span></a>
                        </span>
                        
                        <span><i class="fa fa-angle-right"></i></span>
                        <span class="trail-item trail-end text-theme-colored1">Feedback</span>
                        </div>
                    </nav>
                    </div>
                </div>
                </div>
            </div>
    </section> 
<!-- banner image -->

<!-- feeback form -->
    <section class="divider">
        <div class="container">
            <div class="row">
            <?php
                if(isset($_POST["feed"])) {
                    $con_name = $_POST["form_name"];
                    $con_email = $_POST["form_email"];
                    $con_opn = $_POST["form_sex"];
                    $con_exp = $_POST["form_exp"];
                    $con_msg = $_POST["form_message"];
                    $con_msg = mysqli_real_escape_string($conn, $con_msg);
                    $inp = "INSERT INTO `feedback`(`Name`, `Email`, `opinion`, `exp`, `suggestion`) VALUES ('$con_name','$con_email','$con_opn','$con_exp','$con_msg')";
                    $inp_res = mysqli_query($conn, $inp);
                    ?>
                    <script>
                        windows.location.assign("index.php");
                    </script>
                    <?php                                    
                }
            ?>
            <div class="col-md-6 offset-md-3">
                <div class="border-1px p-30 mb-0">
                <h3 class="text-theme-colored1 mt-0 pt-10">Feedback</h3>
                <hr>
                <p>Give us rating to our web application by sending feeedback form.</p>
                <form id="job_apply_form" name="job_apply_form" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                        <label>FullName <small>*</small></label>
                        <input name="form_name" type="text" placeholder="Enter Your FullName" class="form-control shadow" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                        <label>Email <small>*</small></label>
                        <input name="form_email" class="form-control required email shadow" type="email" placeholder="Enter Email" autocomplete="off" required>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                        <label>Do you like the UI of our web application <small>*</small></label>
                        <select name="form_sex" class="form-control required shadow">
                        <option >Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                        <label>How was your experience while using estudiez?  <small>*</small></label>
                        <select name="form_exp" class="form-control required shadow" >
                        <option >Select</option>
                            <option value="excellent">Excellent</option>
                            <option value="good">Good</option>
                            <option value="average">Average</option>
                            <option value="poor">Poor</option>
                        </select>
                        </div>
                    </div>
                 
                    </div>
                    <div class="mb-3">
                    <label>Would you like to give suggestion for improvement of web application <small>*</small></label>
                    <textarea name="form_message" class="form-control required shadow" rows="5" placeholder="write your suggestion" autocomplete="off" required></textarea>
                    </div>

                    <div class="mb-3 tm-sc-button mb-0 mt-20">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <button name="feed" type="submit" class="btn btn-theme-colored1 btn-block btn-sm mt-20" data-loading-text="Please wait..."> Submit feedback </button>
                    </div>
                </form>
                <!-- Job Form Validation-->
                </div>
            </div>
            </div>
        </div>
    </section>
<!-- feeback form -->

<!-- footer -->
 <?php
  include("footer.php");
 ?>
<!-- footer -->
<!-- custom script for all pages -->
<script src="js/custom.js"></script>
</body>
</html>