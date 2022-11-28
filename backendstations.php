<?php
include("connection.php");

$data=json_decode(file_get_contents('php://input'), true);
//print_r($data);
if($data['method']=='loginstations'){
    include("loginstations.php");
}else if($data['method']=='registerstations'){
    include("registerstations.php");
}else if($data['method']=='readstations'){
    include("readstations.php");
}else if($data['method']=='updatestations'){
    include("updatestations.php");
}else if($data['method']=='delstations'){
    include("delstations.php");
}else{
    //echo "methodstations_fail";
    echo json_encode(["method" => false, "message" => "methodstations_fail"]);
}
?>