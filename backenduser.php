<?php
include("connection.php");

$data=json_decode(file_get_contents('php://input'), true);
//print_r($data);
if($data['method']=='loginuser'){
    include("users/loginuser.php");
}else if($data['method']=='registeruser'){
    include("users/registeruser.php");
}else if($data['method']=='readuser'){
    include("users/readuser.php");
}else if($data['method']=='updateuser'){
    include("users/updateuser.php");
}else if($data['method']=='deluser'){
    include("users/deluser.php");
}else{
    //echo "methoduser_fail";
    echo json_encode(["method" => false, "message" => "methoduser_fail"]);
}
?>