<?php session_start(); ?>
<html>
<head>
	<title>login</title>
</head>

<body>
<?php
include_once("connection.php");

echo $data['method'];
echo $data['userName'];
echo $data['password'];

	/*$userName = mysqli_real_escape_string($mysqli, $data['userName']);
	$password = mysqli_real_escape_string($mysqli, $data['password']);
	echo $mysqli;*/

	$userName = $data['userName'];
	$password = $data['password'];

	if($password == "" || $userName == "") {
		echo "login_user_and_pass_empty";
	} else {
		echo $userName;
		$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$userName' AND password=md5('$password')")
					or die("loginuser_fail");
		
		$row = mysqli_fetch_assoc($result);
		
		/*if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['username'] = $row['username'];
			$_SESSION['user_id'] = $row['user_id'];
		} else {
			echo "nombre de usuario y contraseña invalida";

		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}*/
	}
	echo "loginuser_ok";
?>
