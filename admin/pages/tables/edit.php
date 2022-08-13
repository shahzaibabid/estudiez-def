<?php
session_start();
    $id = $_GET["id"];


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
    <title>UPDATE TABLE</title>
</head>
<body>
    <form action="#" method="post">
    <?php


$sql = mysqli_connect("localhost","root","","lab-automation");
$query = "SELECT * FROM `users` WHERE `id` = $id";

$result = mysqli_query($sql,$query);

if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_array($result)){
        
   
?>
        <label >FULL NAME</label><br>
        <input type="text" name="name" value="<?php echo $row['1'];?>" >
        <br>
        <br>

        <label >EMAIL</label><br>
        <input type="email" name="email" value="<?php echo $row['2'];?>" >
        <br>
        <br>

        <label >PASSWORD</label><br>
        <input type="password" name="pass" value="<?php echo $row['3'];?>" >
        <br>
        <br>

        <input type="submit" value="Edit" name="submit">
    </form>

    <?php
    }}
    if(isset($_POST["submit"])){
        $name;
        $email;
        $password;

        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["pass"];

        $conn = mysqli_connect("localhost","root","","lab-automation");

        $query = "UPDATE `users` SET `username`='$name',`email`='$email',`password`='$password' WHERE `id` = '$id'";
        mysqli_query($conn, $query);

        ?>

        <script>
            window.location.assign("basic-table.php");
        </script>

        <?php
    }

    ?>
</body>
</html>
<?php
}
else{
	header("location:login.php");
}
?>