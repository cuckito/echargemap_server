<?php
include_once("connection.php");

$username = $data['userName'];
$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$username'")
or die("fallo_readuser");
//$result = mysqli_query($con, "SELECT * FROM Users WHERE username=$username".$data['userName']);
?>