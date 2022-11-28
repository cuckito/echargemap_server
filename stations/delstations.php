<?php

include("connection.php");

$station_id = $data['station_id'];

$result=mysqli_query($con, "DELETE FROM Stations WHERE station_id=$station_id")
or die("delstation_fail");
//echojson_encode(["deluser" => false, "message" => "deluser_fail"]);

//echo ("deluser_ok");
echo json_encode(["delstations" => true, "message" => "delstation_ok"]);
?>

