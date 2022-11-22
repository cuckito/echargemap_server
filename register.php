<?php session_start(); ?>

<?php 
 
 /*if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
	}*/

?> 

<html>
<head>
	<title>Register user</title>
</head>

<body>
<?php
include_once("connection.php");

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
				
			$result = mysqli_query($con, "INSERT INTO Users(user_id, username, password, name, lastname, mail, location, role) VALUES(null, '$username', md5('$password'), '$name', '$lastname', '$mail', '$location', 1)");
		}
	echo "register_ok";
?>
</body>
</html>
