<?php

include("connection.php");

$userid = $data['user_id'];

$result=mysqli_query($con, "DELETE FROM Users WHERE user_id=$userid")
or die("deluser_Fail");
echo ("deluser_ok");
?>

