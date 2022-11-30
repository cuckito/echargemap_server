<?php
session_start();

require_once 'connection.php';
#probar conexion a la base de datos
/*if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "Connected successfully";
}*/
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
  <a class="active" href="adpanel.php">Admin panel</a>
  <a href="users.php" id="users">Visualizar usuarios</a>
  <a href="stations.php" id="stations">Visualizar estacions</a>
  <a href="logout.php" id="logout">Cerrar sesion</a>
</div>

<!-- Page content -->
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
    //Hacer un recuento de las estaciones registradas
    $sql = "SELECT COUNT(*) FROM Stations";
    $result = $con->query($sql);
    $row = $result->fetch_row();
    echo "<p>Hay un total de <b>$row[0]</b> estaciones registradas.</p>";
    ?>
</div>
</body>
</html>
