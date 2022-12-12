<?php
include_once("connection.php");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$mail = $data['mail'];

$result = mysqli_query($con, "SELECT * FROM Users WHERE mail='$mail'")
or die("readpass_fail");

echo json_encode(["readpass" => true, "message" => "readpass_ok"/*,$rows*/]);
?>