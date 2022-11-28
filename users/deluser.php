<?php

include("connection.php");

$userid = $data['user_id'];

$result=mysqli_query($con, "DELETE FROM Users WHERE user_id=$userid")
or die("deluser_fail");
//echojson_encode(["deluser" => false, "message" => "deluser_fail"]);

//echo ("deluser_ok");
echo json_encode(["deluser" => true, "message" => "deluser_ok"]);
?>

