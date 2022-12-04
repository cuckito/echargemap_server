<?php
include_once("connection.php");

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