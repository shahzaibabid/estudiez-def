<?php
session_start();
$cid = $_POST['id'];

$db = mysqli_connect("localhost", "root", "", "school");
$at_sel = "SELECT u.Profile,u.F_name,u.L_name FROM `users` u WHERE `Class_id` = $cid";
// echo $sel;
$result = mysqli_query($db, $at_sel);
$i = 0;
while($row = mysqli_fetch_array($result)) { 
    $i++;
?>
    <tr>
        <td><?php echo $row["Profile"]; ?></td>
        <td><?php echo $row["F_name"] . " " . $row["L_name"]; ?></td>
        <td align="center"><label><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios1<?php echo $i; ?>" value="A">Absent</label></td>
        <td><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios2<?php echo $i; ?>" value="P">Present</label></td>
        <td><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios3<?php echo $i; ?>" value="L">Leave</label></td>

    </tr>
<?php 
}
exit();