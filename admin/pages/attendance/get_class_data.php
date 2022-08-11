<?php
session_start();
$cid = $_POST['id'];

$db = mysqli_connect("localhost", "root", "", "school");
$at_sel = "SELECT u.Profile,u.F_name,u.L_name FROM `users` u WHERE `Class_id` = $cid";
// echo $sel;
$result = mysqli_query($db, $at_sel);
while($row = mysqli_fetch_array($result)) { 
?>
    <tr>
        <td><?php echo $row["Profile"]; ?></td>
        <td><?php echo $row["F_name"] . " " . $row["L_name"]; ?></td>
    </tr>
<?php 
}
exit();