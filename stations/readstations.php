<?php
include_once("connection.php");

$stations_id = $data['stations_id'];
$result = mysqli_query($con, "SELECT * FROM Stations WHERE stations_id='$stations_id'")
or die("readstations_fail");
//$result = mysqli_query($con, "SELECT * FROM Users WHERE username=$username".$data['userName']);
?>