<?php
include("connection.php");

$data=json_decode(file_get_contents('php://input'), true);
//print_r($data);
if($data['method']=='loginuser'){
    include("loginuser.php");
}else if($data['method']=='registeruser'){
    include("registeruser.php");
}else if($data['method']=='readuser'){
    include("readuser.php");
}else if($data['method']=='updateuser'){
    include("updateuser.php");
}else if($data['method']=='deluser'){
    include("deluser.php");
}else{
    //echo "methoduser_fail";
    echo json_encode(["method" => false, "message" => "methoduser_fail"]);
}
?>