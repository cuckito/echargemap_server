<?php
session_start();

require_once 'db.php';

#probar conexion a la base de datos
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "Connected successfully";
}





?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#" id="usuarios">Usuarios</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<!-- Page content -->
<div class="content">
  <?php

  ?>
</div>
</body>
</html>
