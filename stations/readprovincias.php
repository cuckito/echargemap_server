<?php
include_once("connection.php");

$provincia = $data['provincia'];
$result = mysqli_query($con, "SELECT DISTINCT provincia FROM Stations")
or die("readprovincias_fail");
$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}
echo json_encode(["readprovincias" => true, "message" => "readprovincias_ok",$rows]);
?>