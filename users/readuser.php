<?php
include_once("connection.php");

$username = $data['userName'];

$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$username'")
or die("readuser_fail");
$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}
echo json_encode(["readuser" => true, "message" => "readuser_ok",$rows]);
?>