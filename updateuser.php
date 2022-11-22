<?php
include_once("connection.php");

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
		try{
			$result = mysqli_query($con, "UPDATE Users SET username='$userName',password='$password',name='$name',lastname='$lastname',mail='$mail',location='$location' WHERE username=$userName");
			$pdo->exec($result);
			echo "Actualitzat.";
		}catch (Exception $e){
			die("El seguent error: $result. "
			. $e->getMessage());
		}
		unset($pdo);
?>

