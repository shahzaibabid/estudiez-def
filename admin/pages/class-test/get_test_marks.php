<?php
session_start();
$cid = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "school");
$at_sel = "SELECT u.Profile,u.F_name,u.L_name FROM `users` u WHERE `Class_id` = $cid";
// echo $sel;
$result = mysqli_query($conn, $at_sel);
$i = 0;
while($row = mysqli_fetch_array($result)) { 
    $i++;
?>
    <tr>
        <td><img src="<?php echo $row["Profile"]; ?>" style="width:3vw; height:3vw;" alt=""></td>
        <td><?php echo $row["F_name"] . " " . $row["L_name"]; ?></td>
        <td class="align-middle"><input type="number" name="ttl<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="20"></td>
        <td class="align-middle"><input type="number" name="obt<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="00"></td>
    </tr>
<?php 
}
exit();