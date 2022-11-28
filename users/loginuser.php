<?php
	include_once("connection.php");

	/*echo $data['method'];
	echo $data['userName'];
	echo $data['password'];
	echo json_encode($data['method']=>$method);
	echo json_encode($data['userName']=>$userName);
	echo json_encode($data['password']=>$password);
	echo json_encode(["userName"=>$userName]);

	$userName = mysqli_real_escape_string($mysqli, $data['userName']);
	$password = mysqli_real_escape_string($mysqli, $data['password']);
	echo $mysqli;

	echo json_encode(["userName"=>$userName]);
	echo json_encode(["password"=>$password]);
	echo json_encode(["method"=>$method]);*/
	$userName = $data['userName'];
	$password = $data['password'];
	$method = $data['method'];

	if($password == "" || $userName == "") {
		echo json_encode(["loginuser" => false, "message" => "login_user_and_pass_empty"]);
		//echo "login_user_and_pass_empty";
	} else {
		//echo $userName;
		$result = mysqli_query($con, "SELECT * FROM Users WHERE userName='$userName' AND password='$password'");
		//$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$userName' AND password=md5('$password')"); //PENDIENTE DE REGISTRO EN FRONT
					//or die("loginuser_query_fail");
		
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$rowcount= mysqli_num_rows($result);
		if($rowcount==1){
			//echo "loginuser_ok";
			echo json_encode(["loginuser" => true, "message" => "loginuser_ok","userName"=>$userName,"password"=>$password,"method"=>$method]);
		}else{
			echo json_encode(["loginuser" => false, "message" => "loginuser_fail","userName"=>$userName]);
           //echo "loginuser_fail";
		}
	}
?>
