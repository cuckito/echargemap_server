<?php

include("connection.php");

$station_id = $data['station_id'];

$result=mysqli_query($con, "DELETE FROM Stations WHERE station_id=$station_id")
or die("delstations_fail");

echo json_encode(["delstations" => true, "message" => "delstations_ok"]);
?>