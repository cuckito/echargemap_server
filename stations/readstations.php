<?php
include_once("connection.php");

$municipi = $data['municipi'];
$result = mysqli_query($con, "SELECT * FROM Stations WHERE municipi='$municipi'")
or die("readstations_fail");
//$result = mysqli_query($con, "SELECT * FROM Users WHERE username=$username".$data['userName']);
?>