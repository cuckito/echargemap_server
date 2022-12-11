<?php
include_once("connection.php");

$municipi = $data['municipi'];
$result = mysqli_query($con, "SELECT DISTINCT municipi FROM Stations")
or die("readmunicipis_fail");
$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}
echo json_encode(["readmunicipis" => true, "message" => "readmunicipis_ok",$rows]);
?>