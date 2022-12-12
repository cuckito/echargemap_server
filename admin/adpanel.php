<?php
session_start();

require_once 'connection.php';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Admin panel</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="sidebar">
<a class="active" href="adpanel.php"><b>Admin panel</b></a>
  <a href="users.php" id="users">Visualizar usuarios</a>
  <a href="stations.php" id="stations">Visualizar estacions</a>
  <a href="updateapi.php" id="updateapi">Actualizar API</a>
  <a href="logout.php" id="logout">Cerrar sesion</a>
</div>

<div class="content">
    <h2>Admin panel</h2>
    <p>En esta pagina podras visualizar los usuarios y las estaciones registradas en la base de datos.</p>
    <?php
    $sql = "SELECT COUNT(*) FROM Users";
    $result = $con->query($sql);
    $row = $result->fetch_row();
    echo "<p>Hay un total de <b>$row[0]</b> usuarios registrados.</p>";
    ?>
    <?php

    $sql = "SELECT COUNT(*) FROM Stations";
    $result = $con->query($sql);
    $row = $result->fetch_row();
    echo "<p>Hay un total de <b>$row[0]</b> estaciones registradas.</p>";
    ?>
</div>
</body>
</html>
