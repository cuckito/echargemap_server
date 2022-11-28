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
  <a class="active" href="#home">Admin panel</a>
  <a href="" id="usuarios">Tabla Usuarios</a>
  <a href="#contact">Tabla estacions</a>
  <a href="#about">About</a>
</div>

<!-- Page content -->
<div class="content">
  <?php
          $con = mysqli_connect($host, $root, $password, $db);
          if (!$con) {
              die('Could not connect: ' . mysqli_error($con));
          }

          $sql = "SELECT * FROM Users";
          $select = mysqli_query($con, $sql);
          $num_rows = mysqli_num_rows($select);
          echo "Number of rows : ";
          echo $num_rows;

          echo "<table>
          <tr>
          <th>user_id</th>
          <th>User name</th>
          <th>Password</th>
          <th>name</th>
          <th>lastname</th>
          <th>mail</th>
          <th>location</th>
          <th>role</th>
          </tr>";
          if ($num_rows > 0) {

              while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
                  echo "<tr>";
                  echo "<td>" . $rows['user_id'] . "</td>";
                  echo "<td>" . $rows['username'] . "</td>";
                  echo "<td>" . $rows['password'] . "</td>";
                  echo "<td>" . $rows['name'] . "</td>";
                  echo "<td>" . $rows['lastname'] . "</td>";
                  echo "<td>" . $rows['mail'] . "</td>";
                  echo "<td>" . $rows['location'] . "</td>";
                  echo "<td>" . $rows['role'] . "</td>";
                  echo "</tr>";
              }
          }
          echo "</table>";
          mysqli_close($con);        
    ?>
    <?php
    // Tabla: Stations
    //Columns:	station_id	id	promotor_gestor	acces	tipus_velocitat	tipus_connexi	latitud	longitud	designaci_descriptiva	kw	ac_dc	adre_a	provincia	codiprov	municipi	nplaces_estaci	tipus_vehicle	geocoded_column	prices	
    $con = mysqli_connect($host, $root, $password, $db);
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    $sql = "SELECT * FROM Stations";
    $select = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($select);
    echo "Number of rows : ";
    echo $num_rows;

    echo "<table>
    <tr>
    <th>station_id</th>
    <th>id</th>
    <th>promotor_gestor</th>
    <th>acces</th>
    <th>tipus_velocitat</th>
    <th>tipus_connexi</th>
    <th>latitud</th>
    <th>longitud</th>
    <th>designaci_descriptiva</th>
    <th>kw</th>
    <th>ac_dc</th>
    <th>adre_a</th>
    <th>provincia</th>
    <th>codiprov</th>
    <th>municipi</th>
    <th>nplaces_estaci</th>
    <th>tipus_vehicle</th>
    <th>geocoded_column</th>
    <th>prices</th>
    </tr>";
    if($num_rows > 0) {
        while($rows = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $rows['station_id'] . "</td>";
            echo "<td>" . $rows['id'] . "</td>";
            echo "<td>" . $rows['promotor_gestor'] . "</td>";
            echo "<td>" . $rows['acces'] . "</td>";
            echo "<td>" . $rows['tipus_velocitat'] . "</td>";
            echo "<td>" . $rows['tipus_connexi'] . "</td>";
            echo "<td>" . $rows['latitud'] . "</td>";
            echo "<td>" . $rows['longitud'] . "</td>";
            echo "<td>" . $rows['designaci_descriptiva'] . "</td>";
            echo "<td>" . $rows['kw'] . "</td>";
            echo "<td>" . $rows['ac_dc'] . "</td>";
            echo "<td>" . $rows['adre_a'] . "</td>";
            echo "<td>" . $rows['provincia'] . "</td>";
            echo "<td>" . $rows['codiprov'] . "</td>";
            echo "<td>" . $rows['municipi'] . "</td>";
            echo "<td>" . $rows['nplaces_estaci'] . "</td>";
            echo "<td>" . $rows['tipus_vehicle'] . "</td>";
            echo "<td>" . $rows['geocoded_column'] . "</td>";
            echo "<td>" . $rows['prices'] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</div>
</body>
</html>
