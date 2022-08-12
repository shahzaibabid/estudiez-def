<?php
session_start();
$cid = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "school");
$test = "SELECT * FROM `english` WHERE `class_id` = $cid";
// echo $sel;
$result = mysqli_query($conn, $test);
$i = 0;
while($row = mysqli_fetch_array($result)) { 
    $i++;
?>
    <tr>
        <td class="align-middle"><?php echo $row[1]; ?></td>        
        <?php
            $at_sel = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = $row[3];";
            $res = mysqli_query($conn, $at_sel);
            $u_row = mysqli_fetch_array($res);            
        ?>
        <td class="align-middle"><?php echo $u_row["F_name"] . " " . $u_row["L_name"]; ?></td>
        <td class="align-middle"><input type="number" name="obt<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row[5]; ?>"></td>
        <td class="align-middle"><?php echo $row[6]; ?></td>
    </tr>
<?php 
}
exit();