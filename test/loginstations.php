<?php
	include_once("connection.php");

	$userName = $data['userName'];
	$password = $data['password'];
	$method = $data['method'];

	if($password == "" || $userName == "") {
		echo json_encode(["loginuser" => false, "message" => "login_user_and_pass_empty"]);
	} else {

		$result = mysqli_query($con, "SELECT * FROM Users WHERE userName='$userName' AND password='$password'");

		
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$rowcount= mysqli_num_rows($result);
		if($rowcount==1){
			echo json_encode(["loginuser" => true, "message" => "loginuser_ok","userName"=>$userName,"password"=>$password,"method"=>$method]);
		}else{
			echo json_encode(["loginuser" => false, "message" => "loginuser_fail","userName"=>$userName]);
		}
	}
?>
