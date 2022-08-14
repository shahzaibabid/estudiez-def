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
        <td><img src="../../../profile/<?php echo $row["Profile"]; ?>" style="width:3.5vw; height:3.5vw; border-radius: 50%;" alt=""></td>
        <td><?php echo $row["F_name"] . " " . $row["L_name"]; ?></td>
        <td class="align-middle"><label><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios1<?php echo $i; ?>" value="A">Absent</label></td>
        <td class="align-middle"><label><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios2<?php echo $i; ?>" value="P">Present</label></td>
        <td class="align-middle"><label><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios3<?php echo $i; ?>" value="L">Leave</label></td>
    </tr>
<?php 
}
exit();