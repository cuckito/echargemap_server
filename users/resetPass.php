<?php
include_once("connection.php");

$password = $data['password'];
$mail = $data['mail'];

if(!empty($data['password'])){

	$password = $data['password'];

}
if(!empty($data['mail'])){

	$mail = $data['mail'];

}
    $result = mysqli_query($con, "UPDATE Users SET password='$password' WHERE mail=$mail")
	or die("resetPass_fail");
	echo json_encode(["updateuser" => true, "message" => "resetPass_ok"]);


?>