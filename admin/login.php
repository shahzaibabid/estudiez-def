<?php
include_once 'auth/connection.php';

session_start();
if(isset($_POST["signin"])){

  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password =mysqli_real_escape_string($conn, $_POST["pass"]);
$password = md5($password);

  $query = "SELECT * FROM `users` WHERE  `email`= '$email' AND `password` = '$password' ";
  $result = mysqli_query($conn,$query);

   if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_array($result)){

      $_SESSION["loggedIn"] = true;
      $_SESSION["id"] = $row['0'];
      $_SESSION["f_name"] = $row["1"];
      $_SESSION["l_name"] = $row["2"];
      $_SESSION["father_name"] = $row["10"];
      $_SESSION["contact"] = $row["4"];
      $_SESSION["age"] = $row["8"];
      $_SESSION["class_id"] = $row["9"];
      $_SESSION["email"] = $row["3"];
      $_SESSION["pass"] = $row["5"];
      $_SESSION["Roll"] = $row["7"];
      $row["Roll"] = $_SESSION["Roll"];
      $_SESSION["path"] = $row["6"];

    if($row["Roll"] == 0){

        $_SESSION["loggedIn"] = true;
        $_SESSION["id"] = $row['0'];
        $_SESSION["f_name"] = $row["1"];
        $_SESSION["l_name"] = $row["2"];
        $_SESSION["father_name"] = $row["10"];
        $_SESSION["contact"] = $row["4"];
        $_SESSION["age"] = $row["8"];
        $_SESSION["class_id"] = $row["9"];
        $_SESSION["email"] = $row["3"];
        $_SESSION["pass"] = $row["5"];
        $_SESSION["Roll"] = $row["7"];
        $row["Roll"] = $_SESSION["Roll"];
        $_SESSION["path"] = $row["6"];
     ?>

<script>
  window.location.assign("admin/index.php");
</script>
     <?php
   }
  else if($_SESSION["type"] == "1"){
    
    ?>

    <script>
      window.location.assign("admin/pages/dashboard/dashboard.php");
    </script>
         <?php

   }
  }}};
error_reporting(0);

//   if ($_SESSION["type"] != null) {
//     ?>
//     <script>
//       window.location.assign("admin.php");
//     </script>
//     <?php
//   }
//   else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiez-Login</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
</head>
<body>
<div class="main">    
     <!-- Sing in  Form -->
     <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">No account? Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login Here</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Your Email" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"  required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
</body>
</html>

<?php
//   }
?>