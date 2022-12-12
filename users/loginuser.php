<?php
	include_once("connection.php");

	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Allow: GET, POST, OPTIONS, PUT, DELETE");

	$userName = $data['userName'];
	$password = $data['password'];
	$method = $data['method'];

	if($password == "" || $userName == "") {
		echo json_encode(["loginuser" => false, "message" => "login_user_and_pass_empty"]);
	} else {
		$passEncrip=md5($password);
		$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$userName' AND password='$passEncrip'");

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$rowcount= mysqli_num_rows($result);
		if($rowcount==1){
			echo json_encode(["loginuser" => true, "message" => "loginuser_ok","userName"=>$userName,"password"=>$password,"method"=>$method]);
		}else{
			echo json_encode(["loginuser" => false, "message" => "loginuser_fail","userName"=>$userName]);
		}
	}
?>
