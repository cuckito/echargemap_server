<?php
// including the database connection file
include_once("connection.php");


if(!empty($_POST['userName'])){

	$userName = $_POST['userName'];

}
if(!empty($_POST['password'])){

	$password = $_POST['password'];

}
if(!empty($_POST['name'])){

	$name = $_POST['name'];

}
if(!empty($_POST['lastname'])){

	$lastname = $_POST['lastname'];

}
if(!empty($_POST['mail'])){

	$mail = $_POST['mail'];

}
if(!empty($_POST['location'])){

	$location = $_POST['location'];

}
		try{
			
			$result = mysqli_query($con, "UPDATE Users SET username='$userName',password='$password',name='$name',lastname='$lastname',mail='$mail',location='$location' WHERE username=$userName");
			$pdo->exec($result);
			echo "Records was updated successfully.";
		}catch{
			die("ERROR: Could not able to execute $result. "
			. $e->getMessage());
		}
		unset($pdo);
?>

