<?php
include_once("connection.php");

$mail = $data['mail'];

$result = mysqli_query($con, "SELECT * FROM Users WHERE mail='$mail'")
or die("readpass_fail");
/*$rows = array();
while($array = mysqli_fetch_assoc($result)) {
    $rows[] = $array;
}*/
echo json_encode(["readpass" => true, "message" => "readpass_ok"/*,$rows*/]);
?>