<?php
session_start();
$cid = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "school");
$sel = "SELECT c.Class_name FROM `class` c WHERE `id` = $cid";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_array($query);
$x = $row["Class_name"];
switch ($x) {
    case 'VI':
        $sel_r = "SELECT * FROM `timetable6`";
        break;
    
    case 'VII':
        $sel_r = "SELECT * FROM `timetable7`";
        break;

    case 'VIII':
        $sel_r = "SELECT * FROM `timetable8`";
        break;

    case 'IX':
        $sel_r = "SELECT * FROM `timetable9`";
        break;

    case 'X':
        $sel_r = "SELECT * FROM `timetable10`";
        break;
}

$res_r = mysqli_query($conn, $sel_r);
$i = 0;
while($row_r = mysqli_fetch_array($res_r)) {
  $i++;

?>
<!-- <input type="hidden" name="tb<?php echo $i; ?>"> -->
<tr>
    <td ><input type="text" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[1]; ?>" readonly></td>
    <td><input type="text" name="mon<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[2]; ?>"></td>
    <td><input type="text" name="tues<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[3]; ?>"></td>
    <td><input type="text" name="wed<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[4]; ?>"></td>
    <td><input type="text" name="thurs<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[5]; ?>"></td>
    <td><input type="text" name="fri<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[6]; ?>"></td>
    <td><input type="text" name="sat<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[7]; ?>"></td>
</tr>
<?php
}
?>