<?php
include_once("connection.php");

//user_id	station_id	review	rating

$userName = $data['userName'];
$password = $data['password'];
$station_id = $data['station_id'];
$review = $data['review'];
$rating = $data['rating'];

$result = mysqli_query($con, "INSERT INTO Reviews(username, station_id,review, rating) VALUES('$username', $station_id, '$review', '$rating')")
or die("reviews_fail");
echo json_encode(["reviews" => true, "message" => "reviews_ok"]);



?>