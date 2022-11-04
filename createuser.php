<!-- <?php session_start(); ?>

<?php 
 if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}


?> -->

<html>
<head>
	<title>Add User</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

$error = "";

if(!empty($_POST['userName'])){

	$userName = $_POST['userName'];

}else{
	
	$error = $error . "username";
}

if(!empty($_POST['password'])){

	$password = $_POST['password'];

}else{
	
	$error = $error . "password";
}

if(!empty($_POST['name'])){

	$name = $_POST['name'];

}else{
	
	$error = $error . "name";
}

if(!empty($_POST['lastname'])){

	$lastname = $_POST['lastname'];

}else{
	
	$error = $error . "lastname";
}

if(!empty($_POST['mail'])){

	$mail = $_POST['mail'];

}else{
	
	$error = $error . "mail";
}

if(!empty($_POST['location'])){

	$location = $_POST['location'];

}else{
	
	$error = $error . "location";
}
		//TODO
		if(!empty($error)) {
			$errorcheck = "Los siguientes campos están vacios";
			$error = $errorcheck . $error;
		} else { 
			// if all the fields are filled (not empty) 
				
			//insert data to database	
			$result = mysqli_query($mysqli, "INSERT INTO Users(user_id, username, password, name, lastname, mail, location, role) VALUES(null, '$username', md5('$password'), '$name', '$lastname', '$mail', '$location', 1)");
		}
	}
?>
</body>
</html>
