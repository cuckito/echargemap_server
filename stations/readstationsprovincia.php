<?php
include_once("connection.php");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$provincia = $data['provincia'];
$result = mysqli_query($con, "SELECT * FROM Stations WHERE provincia='$provincia'")
or die("readstationsprovincia_fail");
$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}
echo json_encode(["readstationsprovincia" => true, "message" => "readstationsprovincia_ok",$rows]);
?>