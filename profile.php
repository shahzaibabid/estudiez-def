<?php
session_start();
include("./auth/connection.php");
$myid=$_SESSION["myuserid"];
$myquery="SELECT * FROM `users` WHERE `id` = $myid";
$query=mysqli_query($conn, $myquery);
$fetch=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiez-Profile</title>
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
        <!- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Student Profile</h2>
              <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                <div class="breadcrumbs">
                  <span class="trail-item trail-begin">
                    <a href="#"><span>Home</span></a>
                  </span>
                
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="trail-item trail-end text-theme-colored1">Student Profile</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section> 
<!-- banner image -->

<!-- Student Profile -->
    <section> 
        <div class="container" data-tm-padding-bottom="250px">
            <div class="row">
            <div class="col-lg-6 col-xl-5 m-lg-auto">
                <div class="whychose-thumb">
                <img class="img-fullwidth" src="profile/<?php echo $fetch[6];?>"  alt="ProfileImage">
                </div>
            </div>
            <div class="col-xl-7 pl-50">
                <h2 class="title line-bottom mb-20 mt-0">Your <span class="text-theme-color-red">Profile</span></h2>
                <p class="mb-50">
                <section>

<div class="container" style="margin-top: 10px;">
<div class="profile-head">
<div class="col-md- col-sm-4 col-xs-12">
<h3 class="text-theme-colored2 line-bottom"> <?php echo $fetch[1]." ".$fetch[2];?></h3>
</div><!--col-md-4 col-sm-4 col-xs-12 close-->


<div class="col-md-10 col-sm-8 col-xs-12">
<ul>
<li><h3 class="custom-1">class: <?php  $c=$fetch[9]; $class="SELECT * FROM `class` WHERE `id` = $c"; $query1=mysqli_query($conn, $class);
$fetch1=mysqli_fetch_array($query1); echo $fetch1[2]; ?></h3></li>
<li><h3 class="custom-1">Email: <?php echo $fetch[3];?></h3></li>
<li><h3 class="custom-1">Contact: <?php echo $fetch[4];?></h3></li>
<li><h3 class="custom-1">Age:<?php echo $fetch[8];?></h3></li>
<li><h3 class="custom-1">Parent/Guardian Name: <?php echo $fetch[10];?></h3></li>
</ul>


</div><!--col-md-8 col-sm-8 col-xs-12 close-->
</div><!--profile-head close-->
</div><!--container close-->


</section><!--section close-->                
</section>
<!-- Student Profile ends -->

<!-- Basic Divider -->
<section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored4-7" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pt-90 pb-90">
                <!-- no text needed here-->
            </div>
    </section>
<!-- Basic Divider -->

<!-- Time Table -->
<section id="team" class="bg-img-cover bg-img-center" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pb-90">
                <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                    <div class="tm-sc-section-title section-title text-center">
                        <div class="title-wrapper">
                        <h2 class="title">Time <span class="text-theme-colored3">Table</span></h2>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="section-content">
                <?php
                include_once('timetable.php')
                ?>
                </div>
            </div>
</section>
<!-- Time Table -->

<!-- Basic Divider -->
<section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored4-7" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pt-90 pb-90">
                <!-- no text needed here-->
            </div>
    </section>
<!-- Basic Divider -->

<!-- Marksheet -->
<section id="team" class="bg-img-cover bg-img-center" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pb-90">
                <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                    <div class="tm-sc-section-title section-title text-center">
                        <div class="title-wrapper">
                        <h2 class="title">Mark <span class="text-theme-colored3">Sheet</span></h2>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="section-content">
                <?php
                include_once('marksheet-table.php')
                ?>
                </div>
            </div>
</section>
<!-- Marksheet -->

<!-- Basic Divider -->
    <section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored4-7" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pt-90 pb-90">
                <!-- no text needed here-->
            </div>
    </section>
<!-- Basic Divider -->

<!-- Test Scores -->
<section id="team" class="bg-img-cover bg-img-center" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pb-90">
                <div class="section-title">
                <div class="row justify-content-center">
                    <!-- <div class="col-lg-8 col-xl-6">
                    <div class="tm-sc-section-title section-title text-center">
                        <div class="title-wrapper">
                        <h2 class="title">Tests <span class="text-theme-colored3">Scores</span></h2>
                        </div>
                    </div>
                    </div> -->
                </div>
                </div>
                <div class="section-content">
                <?php
                include_once('tests-table.php')
                ?>
                </div>
            </div>
</section>
<!-- Test Scores -->

<!-- Basic Divider -->
<section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored4-7" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pt-90 pb-90">
                <!-- no text needed here-->
            </div>
    </section>
<!-- Basic Divider -->

<!-- Attendance Record -->
    <section id="team" class="bg-img-cover bg-img-center" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pb-90">
                <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                    <!-- <div class="tm-sc-section-title section-title text-center">
                        <div class="title-wrapper">
                        <h2 class="title">Attendance <span class="text-theme-colored3">Record</span></h2>
                        </div>
                    </div> -->
                    </div>
                </div>
                </div>
                <div class="section-content">
                <?php
                include_once('attendance-table.php')
                ?>
                </div>
            </div>
    </section>
<!-- Attendance Record -->

<!-- Basic Divider -->
<section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored4-7" data-tm-bg-img="images/bg/p2.jpg">
            <div class="container pt-90 pb-90">
                <!-- no text needed here-->
            </div>
    </section>
<!-- Basic Divider -->



<!-- main content -->

<!-- footer -->
 <?php
  include("footer.php");
  ?>
<!-- footer -->
<!-- custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>