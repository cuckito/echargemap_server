<?php

include("connection.php");

$id = $data['user_id'];

$result=mysqli_query($con, "DELETE FROM Users WHERE user_id=$id");

?>

