<?php
include("connection.php");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$data=json_decode(file_get_contents('php://input'), true);
if($data['method']=='registerstations'){
    include("stations/registerstations.php");
}else if($data['method']=='readstationsmunicipi'){
    include("stations/readstationsmunicipi.php");
}else if($data['method']=='readstationsprovincia'){
    include("stations/readstationsprovincia.php");
}else if($data['method']=='readmunicipis'){
    include("stations/readmunicipis.php");
}else if($data['method']=='readprovincias'){
    include("stations/readprovincias.php");
/*}else if($data['method']=='updatestations'){
    include("stations/updatestations.php");
}else if($data['method']=='delstations'){
    include("stations/delstations.php");
else if($data['method']=='loginstations'){
        include("stations/loginstations.php");
}*/
}else{
    echo json_encode(["method" => false, "message" => "methodstations_fail"]);
}
?>