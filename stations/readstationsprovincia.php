<?php
include_once("connection.php");

$provincia = $data['provincia'];
$result = mysqli_query($con, "SELECT * FROM Stations WHERE provincia='$provincia'")
or die("readstationsprovincia_fail");
$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}
echo json_encode(["readstationsprovincia" => true, "message" => "readstationsprovincia_ok",$rows]);
?>