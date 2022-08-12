<?php
session_start();
$cid = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "school");
$sel = "SELECT u.id,u.F_name,u.L_name FROM `users` u WHERE `Class_id` = $cid";
$query = mysqli_query($conn, $sel);
?><option value="0">SELECT STUDENT</option><?php
while($row = mysqli_fetch_array($query)) {

?>
    <option value="<?php echo $row["id"]; ?>"><?php echo $row["F_name"] . " " . $row["L_name"]; ?></option>
<?php
}

exit();
?>
