<?php
include_once("connection.php");

$userName = $data['userName'];
$password = $data['password'];
$name = $data['name'];
$lastname = $data['lastname'];
$mail = $data['mail'];
$location = $data['location'];

if(!empty($data['userName'])){

	$userName = $data['userName'];

}
if(!empty($data['password'])){

	$password = $data['password'];

}
if(!empty($data['name'])){

	$name = $data['name'];

}
if(!empty($data['lastname'])){

	$lastname = $data['lastname'];

}
if(!empty($data['mail'])){

	$mail = $data['mail'];

}
if(!empty($data['location'])){

	$location = $data['location'];

}
			
			$result = mysqli_query($con, "UPDATE Users SET username='$userName',password=md5('$password'),name='$name',lastname='$lastname',mail='$mail',location='$location' WHERE mail='$mail'")
			or die("updateuser_fail");
			echo json_encode(["updateuser" => true, "message" => "updateuser_ok"]);
?>


