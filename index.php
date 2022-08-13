<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiez-Home</title>
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
<style>
    .active-nav-1{
        background-color: #FF9800;
        /* border-radius: 3px;
        color:pink;         */
    }
</style>
</head>
<body>


<!-- header -->
 <?php
 include_once('header.php');
 ?>
<!-- header -->
<!--main content  -->
 <div class="main-content-area">
    <!-- slider  -->
        <section id="home">
        <div class="container-fluid p-0">
            <div class="row">
            <div class="col"> 
            
                <p class="rs-p-wp-fix"></p>
                <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="firoox-revolution-slider" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                    <rs-module id="rev_slider_1_1"  data-version="6.3.3">
                    <rs-slides>
                        <rs-slide data-key="rs-2" data-title="Slide 1" data-thumb="images/bg/bg1.jpg" data-anim="ei:d;eo:d;s:d;r:default;t:slotslide-horizontal;sl:d;">
                        <img src="images/bg/bg1.jpg" title="firoox-s1" style="background-repeat:no-repeat; background-size:cover;" width="1920" height="1280" data-bg="p:center top;" data-parallax="off" class="rev-slidebg" data-no-retina>
                        <rs-layer
                            id="slider-2-slide-2-layer-10" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:50px,0,-155px,0;yo:330px,243px,235px,229px;"
                            data-text="w:normal;s:28,22,18,18;l:36,36,36,36;ls:1px,1px,0px,1px;fw:500;a:center,center,center,center;"
                            data-dim="w:345px,400px,330px,356px;h:auto,auto,auto,auto;"
                            data-frame_0="y:-50,-37,-28,-17;"
                            data-frame_1="st:500;sp:1000;sR:500;"
                            data-frame_999="o:0;st:w;sR:7500;"
                            style="z-index:12;"
                            class="font-current-theme2 bg-white text-theme-colored3 border-radius-5"
                        >Be educated and feel empowered.
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-2-layer-18" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:55px,0px,8px,0;yo:388px,300px,280px,285px;"
                            data-text="w:normal;s:90,72,62,46;l:95,90,80,48;ls:1px,0px,0px,0px;fw:900;a:left,left,left,center;"
                            data-dim="w:1000px,743px,659px,455px;"
                            data-frame_0="y:-50,-37,-28,-17;"
                            data-frame_1="st:1100;sp:1000;sR:1100;"
                            data-frame_999="o:0;st:w;sR:6900;"
                            style="z-index:11;text-transform:capitalize;"
                            class="font-current-theme2"
                        >E <span class="text-theme-colored3">studiez</span>
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-2-layer-22" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:60px,0px,-225px,0px;yo:510px,410px,380px,360px;"
                            data-text="w:normal;s:20,16,16,13;l:22,20,18,20;a:left,left,left,center;"
                            data-frame_0="y:-50,-37,-28,-17;"
                            data-frame_1="st:1700;sp:1000;sR:1700;"
                            data-frame_999="o:0;st:w;sR:6300;"
                            style="z-index:10;"
                            class="font-current-theme1"
                        ><a href="contactus.php" class="btn btn-theme-colored4">Contact Us</a>
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-2-layer-0" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,14,10,6;l:0,18,13,8;"
                            data-dim="w:100%;h:100%;"
                            data-basealign="slide"
                            data-frame_999="o:0;st:w;sR:8700;"
                            style="z-index:8;background-color:rgba(0,10,22,0.17);"
                        > 
                        </rs-layer>
                        </rs-slide>
                        <rs-slide data-key="rs-11" data-title="Slide 1" data-thumb="images/bg/bg2.jpg" data-anim="ei:d;eo:d;s:d;r:default;t:slotslide-horizontal;sl:d;">
                        <img src="images/bg/bg2.jpg" title="Untitled-1" width="1920" height="1280" style="background-repeat:no-repeat; background-size:cover;" data-bg="p:center top;" data-parallax="off" class="rev-slidebg" data-no-retina>
                        <rs-layer
                            id="slider-2-slide-11-layer-10" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:50px,0,-155px,0;yo:330px,243px,235px,229px;"
                            data-text="w:normal;s:18,22,18,18;l:36,36,36,36;ls:1px,1px,0px,1px;fw:500;a:center,center,center,center;"
                            data-dim="w:345px,400px,330px,356px;h:auto,auto,auto,auto;"
                            data-frame_0="y:-50,-37,-28,-17;"
                            data-frame_1="st:500;sp:1000;sR:500;"
                            data-frame_999="o:0;st:w;sR:7500;"
                            style="z-index:12;"
                            class="font-current-theme2 bg-white text-theme-colored2 border-radius-5"
                        >Be educated and feel empowered.
                         </rs-layer>
                        <rs-layer
                            id="slider-2-slide-11-layer-18" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:55px,0px,8px,0;yo:388px,300px,280px,285px;"
                            data-text="w:normal;s:90,72,62,46;l:95,90,80,48;ls:1px,0px,0px,0px;fw:900;a:left,left,left,center;"
                            data-dim="w:1000px,743px,659px,455px;"
                            data-frame_0="y:-50,-37,-28,-17;"
                            data-frame_1="st:1100;sp:1000;sR:1100;"
                            data-frame_999="o:0;st:w;sR:6900;"
                            style="z-index:11;text-transform:capitalize;"
                            class="font-current-theme2"
                        >E <span class="text-theme-colored1">studiez</span>
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-11-layer-22" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:60px,0px,-225px,0px;yo:510px,410px,380px,360px;"
                            data-text="w:normal;s:20,16,16,13;l:22,20,18,20;a:left,left,left,center;"
                            data-frame_0="y:-50,-37,-28,-17;"
                            data-frame_1="st:1700;sp:1000;sR:1700;"
                            data-frame_999="o:0;st:w;sR:6300;"
                            style="z-index:10;"
                            class="font-current-theme1"
                        ><a href="contactus.php" class="btn btn-theme-colored1">Contact Us</a>
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-11-layer-0" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,14,10,6;l:0,18,13,8;"
                            data-dim="w:100%;h:100%;"
                            data-basealign="slide"
                            data-frame_999="o:0;st:w;sR:8700;"
                            style="z-index:8;background-color:rgba(0,10,22,0.17);"
                        > 
                        </rs-layer>
                        </rs-slide>
                    </rs-slides>
                    <rs-static-layers>
                        <!--
                        -->
                    </rs-static-layers>
                    <rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
                    </rs-module>
                    <script>
                    if(typeof revslider_showDoubleJqueryError === "undefined") {
                        function revslider_showDoubleJqueryError(sliderID) {
                        var err = "<div class='rs_error_message_box'>";
                        err += "<div class='rs_error_message_oops'>Oops...</div>";
                        err += "<div class='rs_error_message_content'>";
                        err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                        err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                        err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                        err += "</div>";
                        err += "</div>";
                        jQuery(sliderID).show().html(err);
                        }
                    }
                    </script>
                </rs-module-wrap>
            </div>
            </div>
        </div>
        </section>
    <!-- slider  -->

    <!-- divider 01-->
        <section class="divider"  data-tm-bg-img="images/bg/b1.png"  data-tm-margin-top="-34px">
            <div class="container">
                <div class="section-content">
                <div class="row">
                    <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="tm-sc-icon-box icon-box text-center iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-sm-30">
                        <div class="icon-box-wrapper">
                        <div class="icon-wrapper mb-20">
                            <a class="icon icon-xl icon-dark icon-circled bg-theme-colored1">
                            <i class="fas fa-user text-white"></i>
                            </a>
                        </div>
                        <div class="icon-text">
                            <h4 class="icon-box-title">Expert Teachers</h4>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="tm-sc-icon-box icon-box text-center iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-sm-30">
                        <div class="icon-box-wrapper">
                        <div class="icon-wrapper mb-20">
                            <a class="icon icon-xl icon-dark icon-circled bg-theme-colored2">
                            <i class="fas fa-graduation-cap text-white"></i>
                            </a>
                        </div>
                        <div class="icon-text">
                            <h4 class="icon-box-title">Quality Education</h4>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="tm-sc-icon-box icon-box text-center iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-sm-30">
                        <div class="icon-box-wrapper">
                        <div class="icon-wrapper mb-20">
                            <a class="icon icon-xl icon-dark icon-circled bg-theme-colored3">
                            <i class="far fa-smile text-white"></i>
                            </a>
                        </div>
                        <div class="icon-text">
                            <h4 class="icon-box-title">Satisfied Result</h4>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="tm-sc-icon-box icon-box text-center iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-sm-30">
                        <div class="icon-box-wrapper">
                        <div class="icon-wrapper mb-20">
                            <a class="icon icon-xl icon-dark icon-circled bg-theme-colored4">
                            <i class="fas fa-heart text-white"></i>
                            </a>
                        </div>
                        <div class="icon-text">
                            <h4 class="icon-box-title">Fulfill With Love</h4>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

    <!-- dividern01 -->

    <!-- about us -->
        <section id="about">
        <div class="container" data-tm-padding-bottom="220px">
            <div class="section-content">
            <div class="row">
             <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                  <h2 class="title">About <span class="text-theme-colored3">Us</span></h2>
                  <p>You’re in good hands now, keeps going… and going… and going.</p>
                </div>
            </div>
                <div class="col-lg-7 col-xl-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="about-text-content mb-md-30">
                    <h3 class="text-theme-colored2 line-bottom">Welcome To <span class="text-theme-colored3">Estudiez</span> </h3>
                    <p>Estudiez is a  educational institute established in 1985. Estudiez has graduated more than 10k  students from their institute. All the courses are taught by experienced and certified faculty. Estudiez creates skilled IT professionals through a variety of courses delivered using the latest teaching methodology.</p>
                    <h5 class="text-theme-colored4">What is the main moto of Estudiez!</h5>
                    <p>The main purpose of Estudiez is to get the students updated about their academic progress through this portal. Students can view their test result, exam result, class timetable, attendance by logging in to their account. Teachers will maintain all student records and will update time to time. Parent/guardian can view his/her child all academic progress by logging in on Estudiez portal. </p>
                    
                </div>
                </div>
                <div class="col-lg-5 col-xl-5 offset-xl-1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="video-popup">
                    <a>
                    <img alt="" src="images/about/reg.gif" class="img-fullwidth">
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="tm-floating-objects">
            <span class="z-index-1 bg-img-cover" data-tm-bg-img="images/bg/f2.png" data-tm-width="100%" data-tm-height="143" data-tm-top="auto" data-tm-bottom="0" data-tm-left="0" data-tm-right="0" data-tm-opacity="-100px"></span>
        </div>
        </section>
    <!-- about us -->

    <!-- our feature -->
        <section id="features" class="bg-img-cover bg-img-center" data-tm-bg-img="images/bg/p2.jpg">
        <div class="container">
            <div class="section-title">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                <div class="tm-sc-section-title section-title text-center">
                    <div class="title-wrapper">
                    <h2 class="title">Our <span class="text-theme-colored3">Features</span></h2>
                    <p>What you do today will determine your future..</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="section-content">
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                <div class="tm-sc-icon-box icon-box icon-right text-center text-lg-end iconbox-centered-in-responsive iconbox-theme-colored3 animate-icon-on-hover animate-icon-rotate-y mb-30 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="icon-box-wrapper">
                    <div class="icon-wrapper"> <a class="icon icon-lg icon-dark icon-circled"> <i class="far fa-edit"></i> </a></div>
                    <div class="icon-text">
                        <h5 class="icon-box-title mb-0 text-theme-colored4">Active Learning</h5>
                        <div class="content">
                        <p>EStudiez provides you active learning strategies to acheive your goals.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tm-sc-icon-box icon-box icon-right text-center text-lg-end iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="icon-box-wrapper">
                    <div class="icon-wrapper"> <a class="icon icon-lg icon-dark icon-circled"> <i class="fas fa-book"></i> </a></div>
                    <div class="icon-text">
                        <h5 class="icon-box-title mb-0 text-theme-colored2">Increase of knowledge</h5>
                        <div class="content">
                        <p>The great aim of education is not knowledge but "ACTION".</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tm-sc-icon-box icon-box icon-right text-center text-lg-end iconbox-centered-in-responsive iconbox-theme-colored4 animate-icon-on-hover animate-icon-rotate-y mb-md-30 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="icon-box-wrapper">
                    <div class="icon-wrapper"> <a class="icon icon-lg icon-dark icon-circled"> <i class="fas fa-graduation-cap"></i> </a></div>
                    <div class="icon-text">
                        <h5 class="icon-box-title mb-0 text-theme-colored3">Quality Education</h5>
                        <div class="content">
                        <p>Quality education is a foundation for dynamic and equitable societies.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="feature-img-content text-center">
                    <img src="images/about/a1.png" alt="a1.png">
                </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                <div class="tm-sc-icon-box icon-box icon-left text-center text-lg-start iconbox-centered-in-responsive iconbox-theme-colored3 animate-icon-on-hover animate-icon-rotate-y mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="icon-box-wrapper">
                    <div class="icon-wrapper"> <a class="icon icon-lg icon-dark icon-circled"> <i class="fas fa-user-graduate"></i> </a></div>
                    <div class="icon-text">
                        <h5 class="icon-box-title mb-0 text-theme-colored4">Expert Teachers</h5>
                        <div class="content">
                        <p>EStudiez students are taught by experienced and certified faculty.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tm-sc-icon-box icon-box icon-left text-center text-lg-start iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="icon-box-wrapper">
                    <div class="icon-wrapper"> <a class="icon icon-lg icon-dark icon-circled"> <i class="far fa-smile"></i> </a></div>
                    <div class="icon-text">
                        <h5 class="icon-box-title mb-0 text-theme-colored2">Satisfied Result</h5>
                        <div class="content">
                        <p>Estudiez provides you the result satisfaction.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tm-sc-icon-box icon-box icon-left text-center text-lg-start iconbox-centered-in-responsive iconbox-theme-colored2 animate-icon-on-hover animate-icon-rotate-y wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="icon-box-wrapper">
                    <div class="icon-wrapper"> <a class="icon icon-lg icon-dark icon-circled"> <i class="fab fa-gratipay"></i> </a></div>
                    <div class="icon-text">
                        <h5 class="icon-box-title mb-0 text-theme-colored3">Fulfill With Love</h5>
                        <div class="content">
                        <p> EStudiez serve you with love and in a very polite manner.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    <!-- our feature -->

    <!-- divider 02 -->
        <section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored4-7" data-tm-bg-img="images/bg/p2.jpg">
        <div class="container pt-90 pb-90">
            <div class="row">
            <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="funfact-item text-center mb-md-30">
                <div class="icon"><span class="fas fa-user-friends"></span></div>
                <div>
                    <h2 class="counter">
                    <span data-animation-duration="2000" data-value="864" class="animate-number">0</span>
                    </h2>
                    <h5 class="title">Qualified Teachers</h5>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="funfact-item text-center mb-md-30">
                <div class="icon"><span class="fas fa-graduation-cap"></span></div>
                <div>
                    <h2 class="counter">
                    <span data-animation-duration="2000" data-value="486" class="animate-number">0</span>
                    </h2>
                    <h5 class="title">Number of Students</h5>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="funfact-item text-center mb-sm-30">
                <div class="icon"><span class="far fa-smile"></span></div>
                <div>
                    <h2 class="counter">
                    <span data-animation-duration="2000" data-value="1468" class="animate-number">0</span>
                    </h2>
                    <h5 class="title">Satisfied Feedback</h5>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="funfact-item text-center">
                <div class="icon"><span class="fas fa-medal"></span></div>
                <div>
                    <h2 class="counter">
                    <span data-animation-duration="2000" data-value="32" class="animate-number">0</span>
                    </h2>
                    <h5 class="title">Student Acheivements</h5>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    <!-- divider 02 -->

    <!-- gallery -->
        <section id="gallery" data-tm-bg-color="#f9f9f9">
        <div class="container pb-90">
            <div class="section-title">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                <div class="tm-sc-section-title section-title text-center">
                    <div class="title-wrapper">
                    <h2 class="title">Our <span class="text-theme-colored3">Gallery</span></h2>
                    <p>We capture your memories forever....</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="section-conent">
            <div class="row">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="gallery-block">
                    <div class="gallery-thumb">
                    <img alt="gallery" src="images/gallery/1.jpg" class="img-fullwidth">
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                    <div class="icons-holder-inner">
                        <div class="gallery-icon">
                        <a href="images/gallery/1.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="gallery-block">
                    <div class="gallery-thumb">
                    <img alt="gallery" src="images/gallery/2.jpg" class="img-fullwidth">
                    </div>
                    <div class="overlay-shade red"></div>
                    <div class="icons-holder">
                    <div class="icons-holder-inner">
                        <div class="gallery-icon">
                        <a href="images/gallery/2.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="gallery-block">
                    <div class="gallery-thumb">
                    <img alt="gallery" src="images/gallery/3.jpg" class="img-fullwidth">
                    </div>
                    <div class="overlay-shade yellow"></div>
                    <div class="icons-holder">
                    <div class="icons-holder-inner">
                        <div class="gallery-icon">
                        <a href="images/gallery/3.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div> 
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="gallery-block">
                    <div class="gallery-thumb">
                    <img alt="gallery" src="images/gallery/4.jpg" class="img-fullwidth">
                    </div>
                    <div class="overlay-shade green"></div>
                    <div class="icons-holder">
                    <div class="icons-holder-inner">
                        <div class="gallery-icon">
                        <a href="images/gallery/4.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                <div class="gallery-block">
                    <div class="gallery-thumb">
                    <img alt="gallery" src="images/gallery/5.jpg" class="img-fullwidth">
                    </div>
                    <div class="overlay-shade blue"></div>
                    <div class="icons-holder">
                    <div class="icons-holder-inner">
                        <div class="gallery-icon">
                        <a href="images/gallery/5.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="gallery-block">
                    <div class="gallery-thumb">
                    <img alt="gallery" src="images/gallery/6.jpg" class="img-fullwidth">
                    </div>
                    <div class="overlay-shade sky"></div>
                    <div class="icons-holder">
                    <div class="icons-holder-inner">
                        <div class="gallery-icon">
                        <a href="images/gallery/6.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

    <!-- gallery -->

    <!-- teachers -->
        <section id="team" class="bg-img-cover bg-img-center" data-tm-bg-img="images/bg/p2.jpg">
        <div class="container pb-90">
            <div class="section-title">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                <div class="tm-sc-section-title section-title text-center">
                    <div class="title-wrapper">
                    <h2 class="title">Our <span class="text-theme-colored3">Teachers</span></h2>
                    <p>Best teachers teaches from heart not from book.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="section-content">
            <div class="row">
                <div class="col-sm-6 col-xl-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="team-member">
                    <div class="team-thumb">
                    <img class="img-fullwidth" src="images/team/team1.jpg" alt="team1.jpg">
                    </div>
                    <div class="team-details text-center bg-theme-colored2">
                    <div class="member-biography">
                        <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                        <p class="mb-0 text-white">English Teacher</p>
                    </div>
                    <ul class="styled-icons icon-dark icon-md icon-theme-colored4 icon-circled pt-3">
                        <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="team-member">
                    <div class="team-thumb">
                    <img class="img-fullwidth" src="images/team/team2.jpg" alt="team2.jpg">
                    </div>
                    <div class="team-details text-center bg-theme-colored1">
                    <div class="member-biography">
                        <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                        <p class="mb-0 text-white">English Teacher</p>
                    </div>
                    <ul class="styled-icons icon-dark icon-md icon-theme-colored3 icon-circled pt-3">
                        <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="team-member">
                    <div class="team-thumb">
                    <img class="img-fullwidth" src="images/team/team3.jpg" alt="team3.jpg">
                    </div>
                    <div class="team-details text-center bg-theme-colored3">
                    <div class="member-biography">
                        <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                        <p class="mb-0 text-white">English Teacher</p>
                    </div>
                    <ul class="styled-icons icon-dark icon-md icon-theme-colored1 icon-circled pt-3">
                        <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-xl-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="team-member">
                    <div class="team-thumb">
                    <img class="img-fullwidth" src="images/team/team4.jpg" alt="team4.jpg">
                    </div>
                    <div class="team-details text-center bg-theme-colored1">
                    <div class="member-biography">
                        <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                        <p class="mb-0 text-white">English Teacher</p>
                    </div>
                    <ul class="styled-icons icon-dark icon-md icon-theme-colored2 icon-circled pt-3">
                        <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    <!-- teachers -->

<!-- contact-us  -->
    <section class="divider">
            <div class="container">
            <div class="tm-sc-section-title section-title text-center">
                    <div class="title-wrapper">
                    <h2 class="title">Contact <span class="text-theme-colored3">Us</span></h2>
                    <p>Question not answered yet? We are here to help!.</p>
                    </div>
                </div>
                <div class="row pt-30">
                <div class="col-lg-4">
                    <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                    <div class="icon-box-wrapper">
                        <div class="icon-wrapper">
                        <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-044-call-1"></i> </a>
                        </div>
                        <div class="icon-text">
                        <h5 class="icon-box-title mt-0">Phone</h5>
                        <div class="content"><a href="tel:+123.456.7890">+92 33001415778</a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                    <div class="icon-box-wrapper">
                        <div class="icon-wrapper">
                        <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-043-email-1"></i> </a>
                        </div>
                        <div class="icon-text">
                        <h5 class="icon-box-title mt-0">Email</h5>
                        <div class="content"><a href="mailto:needhelp@yourdomain.com">estudiez578@gmail.com</a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                    <div class="icon-box-wrapper">
                        <div class="icon-wrapper">
                        <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-025-world"></i> </a>
                        </div>
                        <div class="icon-text">
                        <h5 class="icon-box-title mt-0">Address</h5>
                        <div class="content">Dha phase 5 street 178, Karachi</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                    <div class="icon-box-wrapper">
                        <div class="icon-wrapper">
                        <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-047-location"></i> </a>
                        </div>
                        <div class="icon-text">
                        <h5 class="icon-box-title mt-0">UK Address</h5>
                        <div class="content">66 Broklyn Street, USA</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="mt-0 mb-0">Interested in discussing?</h2>
                    <p class="font-size-20">Question not answered yet? We are here to help!</p>
            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form" class="" action="https://kodesolution.com/html/2017/kidspro-html-b5/includes/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Name <small>*</small></label>
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Email <small>*</small></label>
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Subject <small>*</small></label>
                                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Message</label>
                                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="mb-3">
                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                                
                            </div>
                            </form>

            <!-- Contact Form -->
                    <script>
                    (function($) {
                        $("#contact_form").validate({
                        submitHandler: function(form) {
                            var form_btn = $(form).find('button[type="submit"]');
                            var form_result_div = '#form-result';
                            $(form_result_div).remove();
                            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                            var form_btn_old_msg = form_btn.html();
                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                            $(form).ajaxSubmit({
                            dataType:  'json',
                            success: function(data) {
                                if( data.status == 'true' ) {
                                $(form).find('.form-control').val('');
                                }
                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                $(form_result_div).html(data.message).fadeIn('slow');
                                setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                            }
                            });
                        }
                        });
                    })(jQuery);
                    </script>
                </div>
                </div>
            </div>
    </section>
<!-- contact-us -->

<!-- contact map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3620.9258171194333!2d67.0734496!3d24.8322104!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33c6b03254785%3A0x1b2a58aef179afe2!2sAptech%20Defence%20Center!5e0!3m2!1sen!2s!4v1660227394364!5m2!1sen!2s" data-tm-width="100%" height="500" frameborder="0" allowfullscreen=""></iframe>

            </div>
        </div>
    </section>
<!-- contact map -->
<!-- contact-us  -->    
    
 </div>
<!--main content  -->

<!-- footer -->
 <?php
  include("footer.php");
 ?>
<!-- footer -->
<!-- custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>