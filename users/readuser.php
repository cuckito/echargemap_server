<?php
include_once("connection.php");

$username = $data['userName'];

/*$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$username'")
/or die("readuser_fail");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$rowcount= mysqli_num_rows($result);
if($rowcount==1){
    //echo json_encode(["readuser" => true, "message" => "readuser_ok","userName"=>$userName]);
    echo json_encode([$result]);
    echo json_encode(["readuser" => true, "message" => "readuser_ok","userName"=>$userName]);
}else{
    echo json_encode(["no"]);
    //echo json_encode(["loginuser" => false, "message" => "loginuser_fail","userName"=>$userName]);
   //echo "loginuser_fail";
}*/


$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$username'")
or die("readuser_fail");
$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}
echo json_encode(["readuser" => true, "message" => "readuser_ok",$rows]);
//$result = mysqli_query($con, "SELECT * FROM Users WHERE username=$username".$data['userName']);
//echo json_encode(["readuser" => true, "message" => "readuser_ok","userName"=>$userName]);
//echo json_encode(["readuser" => true, "message" => "readuser_ok","userName"=>$userName]);
//echo json_encode(["readuser" => true, "message" => "readuser_ok","userName"=>$userName,"password"=>$password,"name"=>$name,"lastname"=>$lastname,"mail"=>$mail,"location"=>$location]);
//echo $data;
?>