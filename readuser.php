<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM Users WHERE username=".$_POST['userName']);
//TODO: VER COMO DEVOLVER RESULT A REACT
?>