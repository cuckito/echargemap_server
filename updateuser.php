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
			$conn->exec($result);
			echo "updateuser_ok";
		}catch (Exception $e){
			die("updateuser_fail: $result. ". $e->getMessage());
		}
		unset($conn);
?>

