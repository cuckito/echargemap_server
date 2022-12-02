<?php
include_once("connection.php");

echo $data[0];

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
		/*try{
			$result = mysqli_query($con, "UPDATE Users SET username='$userName',password='$password',name='$name',lastname='$lastname',mail='$mail',location='$location' WHERE username=$userName");
			$con->exec($result);
			//echo "updateuser_ok";
			echo json_encode(["updateuser" => true, "message" => "updateuser_ok"]);
		}catch (Exception $e){
			//die("updateuser_fail: $result. ". $e->getMessage());
		}
		unset($con);*/
			
			$result = mysqli_query($con, "UPDATE Users SET username='$userName',password='$password',name='$name',lastname='$lastname',mail='$mail',location='$location' WHERE mail=$mail")
			or die("updateuser_fail");
			echo json_encode(["updateuser" => true, "message" => "updateuser_ok"]);
			//die("updateuser_fail: $result. ". $e->getMessage());
			//unset($con);



		
		/*$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$username'")
		or die("readuser_fail");
		$rows = array();
		while($array = mysqli_fetch_assoc($result)) {
			$rows[] = $array;
		}
		echo json_encode(["readuser" => true, "message" => "readuser_ok",$rows]);*/
		
		/*$result = mysqli_query($con, "UPDATE Users SET username='$userName',password='$password',name='$name',lastname='$lastname',mail='$mail',location='$location' WHERE username=$userName")
		or die("updateuser_fail");
		$rows = array();
		while($array = mysqli_fetch_assoc($result)) {
			$rows[] = $array;
		}
		echo json_encode(["updateuser" => true, "message" => "updateuser_ok"]);*/
?>


