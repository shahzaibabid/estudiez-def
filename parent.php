<?php
include_once 'auth/connection.php';
if(isset($_POST["register"])){
 
$p_first_name = mysqli_real_escape_string($conn, $_POST["p_f_name"]);
$p_last_name = mysqli_real_escape_string($conn, $_POST["P_l_name"]);
$p_email = mysqli_real_escape_string($conn, $_POST["p_email"]);
$p_password = mysqli_real_escape_string($conn, $_POST["p_pass"]);
$p_contact = mysqli_real_escape_string($conn, $_POST["p_contact"]);
$student_id = mysqli_real_escape_string($conn, $_POST["student_id"]);


  $image_name = $_FILES["img"]["name"];
  $image_type = $_FILES["img"]["type"];
  $image_temp = $_FILES["img"]["tmp_name"];
  $image_size = $_FILES["img"]["size"];
  $path = "./profile/" . $image_name;
 
  
  if(filter_var($p_email,FILTER_VALIDATE_EMAIL)){
      if(preg_match('/[A-Z]{1}.[A-Za-z0-9 ]{1,}/',$p_password)){
          $p_password = md5($p_password);
          
          $query = "INSERT INTO `parent`(`id`, `F_name`, `L_name`, `Email`, `Contact`, `Password`, `Profile`, `student_ID`) VALUES (Null,'$p_first_name','$p_last_name','$p_email','$p_contact','$p_password','$image_name','$student_id')";
          mysqli_query($conn, $query);
          move_uploaded_file($image_temp,$path);
      
  
      header("location: index.php");
    }
    else{
      ?>
      <script>window.location.assign("register.php?error");</script>
      <?php
    }
  }
}
?>
