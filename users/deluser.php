<?php

include("connection.php");

$mail = $data['mail'];

$result=mysqli_query($con, "DELETE FROM Users WHERE mail='$mail'")
or die("deluser_fail");

echo json_encode(["deluser" => true, "message" => "deluser_ok"]);
?>

