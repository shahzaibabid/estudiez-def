<?php
include_once 'auth/connection';

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
$class_id = mysqli_real_escape_string($conn, $_POST["class"]);
$father_name = mysqli_real_escape_string($conn, $_POST["fathername"]);


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
