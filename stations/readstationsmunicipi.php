<?php
include_once("connection.php");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$municipi = $data['municipi'];
$result = mysqli_query($con, "SELECT * FROM Stations WHERE municipi='$municipi'")
or die("readstationsmunicipi_fail");
$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}
echo json_encode(["readstationsmunicipi" => true, "message" => "readstationsmunicipi_ok",$rows]);
//$result = mysqli_query($con, "SELECT * FROM Users WHERE username=$username".$data['userName']);
?>