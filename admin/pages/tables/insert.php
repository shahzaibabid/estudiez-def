<?php
session_start();
  $conn = mysqli_connect("localhost","root","","lab-automation");

  if(isset($_POST["submit"])){
   


    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["pass"]);
    $image_name = $_FILES["img"]["name"];
    $image_type = $_FILES["img"]["type"];
    $image_temp = $_FILES["img"]["tmp_name"];
    $image_size = $_FILES["img"]["size"];
    $path = "./image/" . $image_name;
   
    
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        if(preg_match('/[A-Z]{1}.[A-Za-z0-9 ]{1,}/',$password)){
            $password = md5($password);
            $conn = mysqli_connect("localhost","root","","lab-automation");
            
            $query = "INSERT INTO `users`(`id`, `username`, `email`, `Password`,`img`) VALUES (Null,'$username','$email','$password','$image_name')";
            mysqli_query($conn, $query);
            move_uploaded_file($image_temp,$path);
        
    
        header("location: basic-table.php");
      }
      else{
        ?>
        <script>window.location.assign("insert.php?error");</script>
        <?php
      }
    }
}
?>
<?php

if($_SESSION["name"] != ""){
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300;378&family=Source+Sans+Pro:ital@1&family=Zen+Antique&display=swap');
*{
  font-family: 'Red Hat Mono', monospace;
}
:root{
  --First-color:#161624;
  --Second-color:#f2363c;
  --third-color:#573b8a;
} 
body{
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: url(https://wallpapercave.com/wp/wp2757874.gif);
  background-size:cover ;
  background-position:right;
}
.main{
  width: 350px;
  background-color: #161624aa;
  height: 500px;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
}
#chk{
  display: none;
}
.signup{
  position: relative;
  width:100%;
  height:100%;
}
.user-box {
  position: relative;
  width :60%;
  margin:0px auto;
}
.submit{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 10px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.submit:hover{
  background: #6d44b8;
}
.login{
  height: 470px;
  background: #eee;
  border-radius: 60% / 10%;
  transform: translateY(-180px);
  transition: .8s ease-in-out;
}
#chk:checked ~ .login{
  transform: translateY(-530px);
}
#chk:checked ~ .login label{
  transform: scale(1);
}
#chk:checked ~ .signup .sig{
  transform: scale(.6);
  margin-top:10px;
}
.user-box label {
  position: absolute;
  top:0px;
  left: 0px;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}
.user-box input {
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.user-box input:focus ~ label,
.user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #f2363c;
  font-size: 12px;
  font-weight:bold;
}
label[for="chk"] {
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
} 
.sig{
  color:#fff;
	margin: 40px;
}
.log{
	margin: 80px;
}
.login label , .login input{
  color:#573b8a;
}
.login input{
  border-color:#573b8a;
}
</style>
<form action="#" method="post" enctype="multipart/form-data">
<div class="main">  	
		<input type="checkbox" id="chk">

			<div class="signup">
				<form>
					<label for="chk" class="sig">Insert Users</label>
				
    <div class="user-box">
      <input type="text" title="Enter Username" name="username" required>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="text" title="Enter email" name="email" required>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" title="Enter password" name="pass" required>
      <label>Password</label>
    </div>
    <div class="user-box">
    <input type="file" name="img" id="">
    </div>
    
					<input class="submit" type="submit" name="submit" value="submit">
				</form>
			</div>

			</form>
    
</body>
</html>
<?php
}
else{
	header("location:login.php");
}
?>