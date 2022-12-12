<?php
session_start(); 

include_once("connection.php");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$username = $data['userName'];
$password = $data['password'];
$name = $data['name'];
$lastname = $data['lastname'];
$mail = $data['mail'];
$location = $data['location'];


$error = "";

if(!empty($data['userName'])){

	$userName = $data['userName'];

}else{
	
	$error = $error . "username";
}

if(!empty($data['password'])){

	$password = $data['password'];

}else{
	
	$error = $error . "password";
}

if(!empty($data['name'])){

	$name = $data['name'];

}else{
	
	$error = $error . "name";
}

if(!empty($data['lastname'])){

	$lastname = $data['lastname'];

}else{
	
	$error = $error . "lastname";
}

if(!empty($data['mail'])){

	$mail = $data['mail'];

}else{
	
	$error = $error . "mail";
}

if(!empty($data['location'])){

	$location = $data['location'];

}else{
	
	$error = $error . "location";
}
		if(!empty($error)) {
			$errorcheck = "Los siguientes campos están vacios";
			$error = $errorcheck . $error;
		} else { 
				
			$result = mysqli_query($con, "INSERT INTO Users(user_id, username, password, name, lastname, mail, location, role) VALUES(null, '$username', md5('$password'), '$name', '$lastname', '$mail', '$location', 1)")
			or die("registeruser_fail");
			
		}
	echo json_encode(["registeruser" => true, "message" => "registeruser_ok","userName"=>$userName,"password"=>$password,"name"=>$name,"lastname"=>$lastname,"mail"=>$mail,"location"=>$location]);
?>
