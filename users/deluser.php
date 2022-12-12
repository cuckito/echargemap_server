<?php
include("connection.php");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$mail = $data['mail'];

$result=mysqli_query($con, "DELETE FROM Users WHERE mail='$mail'")
or die("deluser_fail");

echo json_encode(["deluser" => true, "message" => "deluser_ok"]);
?>

