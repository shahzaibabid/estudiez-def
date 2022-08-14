<!-- connection -->

<?php
$server = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "school";

$conn = mysqli_connect($server,$username,$dbpassword,$dbname);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//   }
//   echo "Connected successfully";

?>