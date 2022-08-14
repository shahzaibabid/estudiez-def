
<?php

include_once 'auth/connection.php';

$show_alert = true;
$show_alert = false;


if($_SERVER["REQUEST_METHOD"]== "POST"){
    $f_name = mysqli_real_escape_string($conn, $_POST["f_name"]);
    $l_name = mysqli_real_escape_string($conn, $_POST["l_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["pass"]);

$password = md5($password);


$exist = "SELECT * FROM `users` WHERE `email` = '$email'";

$match = mysqli_query($conn,$exist);
if(mysqli_num_rows($match)){
  // $show_error = "username already exist";
  $show_alert = true;
}
else{
if(isset($_POST["submit"])){
 
$f_name = mysqli_real_escape_string($conn, $_POST["f_name"]);
$l_name = mysqli_real_escape_string($conn, $_POST["l_name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["pass"]);
$contact = mysqli_real_escape_string($conn, $_POST["contact"]);
$age = mysqli_real_escape_string($conn, $_POST["age"]);
$class_id = mysqli_real_escape_string($conn, $_POST["class_id"]);
$father_name = mysqli_real_escape_string($conn, $_POST["father_name"]);


  $image_name = $_FILES["img"]["name"];
  $image_type = $_FILES["img"]["type"];
  $image_temp = $_FILES["img"]["tmp_name"];
  $image_size = $_FILES["img"]["size"];
  $path = "./img/" . $image_name;
 
  
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
      if(preg_match('/[A-Z]{1}.[A-Za-z0-9 ]{1,}/',$password)){
          $password = md5($password);
          
          $query = "INSERT INTO `users`(`id`, `F_name`, `L_name`, `Email`, `Contact`, `Password`, `Profile`, `Age`, `Class_id`, `father_name`) VALUES (Null,'$f_name','$l_name','$email','$contact','$password','$image_name','$age','$class_id','$father_name')";
          mysqli_query($conn, $query);
          move_uploaded_file($image_temp,$path);
      
  
      header("location: login.php");
    }
    else{
      ?>
      <script>window.location.assign("signup.php?error");</script>
      <?php
    }
  }
}}}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiez-Register</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

</head>
<body>
<div class="main">
  <!-- Sign up form -->
  <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register Here</h2>
                        <form method="POST" class="register-form" enctype="multipart/form-data" id="register-form">
                            <div class="form-group">
                                <label for="First name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="f_name" id="name" placeholder="Your First Name" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label for="Last name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="l_name" id="name" placeholder="Your Last Name" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="father_name" id="pass" placeholder="your father name" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"  autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required />
                            </div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="tel" name="contact" id="re_pass" placeholder="contact number" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="age" name="age" id="pass" placeholder="Enter your age" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="class_id" id="pass" placeholder="Class ID" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="file" name="img" id="pass"  required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all Terms & Condition</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link"> Already a member? Login here</a>
                    </div>
                </div>
            </div>
        </section>  
</div>     
</body>
</html>