<?php
include("connection.php");

$data=json_decode(file_get_contents('php://input'), true);
//print_r($data);
if($data['method']=='registerstations'){
    include("stations/registerstations.php");
}else if($data['method']=='readstations'){
    include("stations/readstations.php");
}else if($data['method']=='updatestations'){
    include("stations/updatestations.php");
}else if($data['method']=='delstations'){
    include("stations/delstations.php");
/*else if($data['method']=='loginstations'){
        include("stations/loginstations.php");
}*/
}else{
    //echo "methodstations_fail";
    echo json_encode(["method" => false, "message" => "methodstations_fail"]);
}
?>