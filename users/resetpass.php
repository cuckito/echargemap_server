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
    $result = mysqli_query($con, "UPDATE Users SET password=md5('$password') WHERE mail='$mail'")
	or die("resetpass_fail");
	echo json_encode(["resetpass" => true, "message" => "resetpass_ok"]);
?>