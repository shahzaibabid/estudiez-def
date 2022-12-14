<?php
include_once 'auth/connection.php';

session_start();

if(isset($_POST["signin"])){                    
    $email = $_POST["email"];
    // $remember_me = $_POST["remember_me"];
    $pass = $_POST["pass"];
    $pass = md5($pass);    


      $x = $_POST["gndr"];
        switch ($x) {
            case 'Student':
                $sel = "SELECT * FROM `users` WHERE `Email` = '$email' && `Password` = '$pass'";
                $result = mysqli_query($conn, $sel);
            break;
            
            case 'Parent': 
                $sel = "SELECT * FROM `parent` WHERE `Email` = '$email' && `Password` = '$pass'";
                $result = mysqli_query($conn, $sel);
            break;
                
            case 'Teacher':
                $sel = "SELECT * FROM `teachers` WHERE `Email` = '$email' && `Password` = '$pass'";
                $result = mysqli_query($conn, $sel);
            break;

            default:
                $sel = "SELECT * FROM `users` WHERE `Email` = '$email' && `Password` = '$pass'";
                $result = mysqli_query($conn, $sel);
            break;
        }
        
    if(mysqli_num_rows($result)) {
      while($row = mysqli_fetch_array($result)) {
        $_SESSION["myuserid"] = $row[0];
        $_SESSION["name"] = $row[1] . " " . $row[2];
        $x = $_POST["gndr"];
        switch ($x) {
            case 'Student':
                $_SESSION["roll"] = $row[7];
                $_SESSION["profile"] = $row[6];   
            break;
            
            case 'Parent': 
                $_SESSION["roll"] = $row[7];
                $_SESSION["profile"] = $row[6];   
            break;
                
            case 'Teacher':
                $_SESSION["roll"] = $row[6];
                $_SESSION["profile"] = $row[5];   
            break;

            default:
            $_SESSION["roll"] = $row[7];
            $_SESSION["profile"] = $row[6];   
        break;
        }                     
      }
// 0 - users
// 1 - teacher
// 2 - parent
// 3 - admin
      if ($_SESSION["roll"] == 0)
      {
          ?>
          <Script>
              window.location.assign("./index.php");
          </Script>            
          <?php
      }
      else if ($_SESSION["roll"] == 3)
      {
          ?>
          <Script>
              window.location.assign("./admin/pages/dashboard/dashboard.php");
          </Script>
          <?php
      }  
      else if ($_SESSION["roll"] == 2)
      {
          ?>
          <Script>
              window.location.assign("./index.php");
          </Script>            
          <?php
      }
      else if ($_SESSION["roll"] == 1)
      {
          ?>
          <Script>
              window.location.assign("./admin/pages/dashboard/dashboard.php");
          </Script>
          <?php
      } 
    }
    else {
      $error = "Invalid Email or Password";
    }
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiez-Register</title>
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
    .active-nav-5{
        background-color: #FF9800;
        /* border-radius: 3px;
        color:pink;         */
    }
</style>

<body>
<!-- main content -->
<!-- header -->
    <?php
    include_once('header.php');
    ?>
<!-- header -->
<!-- banner image -->
    <section class="page-title divider layer-overlay overlay-dark-5 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg3.jpg">
                <div class="container pt-90 pb-90">
                
                    <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <h2 class="title text-white">Login/Register</h2>
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                            <div class="breadcrumbs">
                            <span class="trail-item trail-begin">
                                <a href="#"><span>Home</span></a>
                            </span>
                            
                            <span><i class="fa fa-angle-right"></i></span>
                            <span class="trail-item trail-end text-theme-colored1">Login/Register</span>
                            </div>
                        </nav>
                        </div>
                    </div>
                    </div>
                </div>
    </section> 
<!-- banner image -->

<!-- login &  register form -->

    <section>
        <div class="container">
            <?php if(isset($error)) { ?><marquee class="mb-5 text-danger" behavior="smooth" direction="left"><?php echo $error; ?></marquee><?php } ?>
            <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab-area" data-bs-toggle="tab" href="#login-tab" role="tab" aria-controls="login-tab" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab-area" data-bs-toggle="tab" href="#student-register-tab" role="tab" aria-controls="register-tab" aria-selected="false"> Student Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab-area" data-bs-toggle="tab" href="#parent-register-tab" role="tab" aria-controls="register-tab" aria-selected="false"> Parent Registration</a>
                </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active p-15" id="login-tab" role="tabpanel" aria-labelledby="login-tab-area">
                    <h4 class="text-gray mt-0 pt-10">Login</h4>
                    <hr>
                    <p>Login Here!</p>
                    <form name="login-form" method="Post" action="#" class="clearfix">
                    <div class="mt-5 form-floating mb-3">                            
                            <div class="d-flex w-100 justify-content-evenly">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gndr" value="Student" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Student
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gndr" value="Parent" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    Parent
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gndr" value="Teacher" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Teacher
                                    </label>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                        <label for="form_username_email">Email Address</label>
                        <input id="form_username_email" name="email" class="form-control shadow" type="email" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                        <label for="form_password">Password</label>
                        <input id="form_password" name="pass" class="form-control shadow" type="password" >
                        </div>
                    </div>
                    <div class="checkbox mt-15">
                        <label for="form_checkbox">
                        <input id="form_checkbox" name="form_checkbox" type="checkbox">
                        Remember me </label>
                    </div>
                    <div class="mb-3 tm-sc-button mt-10">
                        <button type="submit" name="signin" class="btn btn-dark">Login</button>
                    </div>
                    <div class="clearfix pt-15">
                        <a class="text-theme-colored1 font-weight-600 font-size-14" href="#">Forgot Your Password?</a>
                    </div>
                    
                    </form>
                    </div>
                <div class="tab-pane fade p-10" id="student-register-tab" role="tabpanel" aria-labelledby="register-tab-area">
                    <form enctype="multipart/form-data" action="student.php" name="reg-form" class="register-form" method="post">
                    <div class="icon-box mb-0 p-0">
                       
                        <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Student Account? Register Here.</h4>
                    </div>
                    <hr>
                   
                    <div class="row">
                        <div class="mb-3 col-md-6">
                        <label>FirstName</label>
                        <input name="f_name" class="form-control" type="text">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label>LastName</label>
                        <input name="l_name" class="form-control" type="text">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label>Parent/Guardian Name</label>
                        <input name="fathername" class="form-control" type="text">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label>Email Address</label>
                        <input name="email" class="form-control" type="email">
                        </div>
                    </div>
   
                    <div class="row">
                       
                        <div class="mb-3 col-md-6">
                        <label>Contact number</label>
                        <input id="form_re_enter_password" name="contact"  class="form-control" type="phone">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label for="form_choose_password">Age</label>
                        <input id="form_choose_password" name="age" class="form-control" type="text">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label for="form_choose_password">Class </label>
                        <div class="mb-3">
                        <select name="class" class="form-control required">
                                     <option >Select class</option>
                                <?php
                                $class = "SELECT * FROM `class` WHERE 1";
                                $let = mysqli_query($conn,$class);
                                if(mysqli_num_rows($let)){
                                    while($see = mysqli_fetch_array($let)){
                                        ?>
                                     
                                <option value="<?php echo $see[0];?>"><?php echo $see[2];?></option>
                            
                                        <?php
                                    }
                                }
                                
                                ?>
                               </select>
                        </div>
                        </div>
                        <div class="mb-3 col-md-6">
                        <label for="form_choose_password">Password</label>
                        <input id="form_choose_password" name="pass" class="form-control" type="text" placeholder="Enter first letter capital">
                        </div>
                        <div class="mb-3 col-md-12">
                        <label for="form_choose_password">Choose Profile</label>
                        <input id="form_choose_password" name="img" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="mb-3 tm-sc-button">
                        <button name="submit" class="btn btn-dark btn-theme-colored1 mt-15" type="submit">Register Now</button>
                    </div>
                    </form>
                </div>
<!-- parent -->


                <div class="tab-pane fade p-10" id="parent-register-tab" role="tabpanel" aria-labelledby="register-tab-area">
                    <form enctype="multipart/form-data" action="parent.php" name="reg-form" class="register-form" method="post">
                    <div class="icon-box mb-0 p-0">
                       
                        <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Parent Student Account? Register Here.</h4>
                    </div>
                    <hr>
                   
                    <div class="row">
                        <div class="mb-3 col-md-6">
                        <label>FirstName</label>
                        <input name="p_f_name" class="form-control" type="text">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label>LastName</label>
                        <input name="P_l_name" class="form-control" type="text">
                        </div>
                    
                        <div class="mb-3 col-md-6">
                        <label>Email Address</label>
                        <input name="p_email" class="form-control" type="email">
                        </div>

                        <div class="mb-3 col-md-6">
                        <label>Contact number</label>
                        <input id="form_re_enter_password" name="P_contact"  class="form-control" type="phone">
                        </div>
                    
                        <div class="mb-3 col-md-6">
                        <label for="form_choose_password">Student Id </label>
                        <div class="mb-3">
                        <select name="class" class="form-control required">
                                     <option >Select class</option>
                                <?php
                                $class = "SELECT * FROM `users` WHERE 1";
                                $let = mysqli_query($conn,$class);
                                if(mysqli_num_rows($let)){
                                    while($see = mysqli_fetch_array($let)){
                                        ?>
                                     
                                <option value="<?php echo $see[12];?>"><?php echo $see[9];?></option>
                            
                                        <?php
                                    }
                                }
                                
                                ?>
                               </select>
                        </div>
                        </div>
                    
                        <div class="mb-3 col-md-6">
                        <label for="form_choose_password">Choose Password</label>
                        <input id="form_choose_password" name="p_pass" class="form-control" type="text" placeholder="Enter first letter capital">
                        </div>
                        <div class="mb-3 col-md-12">
                        <label for="form_choose_password">Choose Profile</label>
                        <input id="form_choose_password" name="img" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="mb-3 tm-sc-button">
                        <button class="btn btn-dark btn-theme-colored1 mt-15" name="register" type="submit">Register Now</button>
                    </div>
                    </form>
                </div>

                </div>
            </div>
            </div>
        </div>
    </section>
<!-- login &  register form -->

<!-- footer -->
    <?php
    include("footer.php");
    ?>
<!-- footer -->
</div>     
<!-- main content -->
<!-- custom script for all pages -->
<script src="js/custom.js"></script>
</body>
</html>