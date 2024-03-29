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
  <title></title>
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
    <h2>Visualizar estaciones</h2>
    <p>Introduce el id de la estacion que quieres borrar</p>
    <form name='form' method="post">
    <input type="text" name="stationid" />
    <input type='submit' name='statdel' value='Delete station'><br>
    </form>
    <?php
    if(isset($_POST['statdel']))
    {
        $stationid = $_POST['stationid'];
        $sql = "DELETE FROM Stations WHERE station_id='$stationid'";
        $result = mysqli_query ($con, $sql);
        echo "<b>Se ha borrado la estacion: $stationid</b>";
    }
    ?>
    <br>
    <?php
    // Tabla: Stations
    $con = mysqli_connect($host, $root, $password, $db);
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    $sql = "SELECT * FROM Stations";
    $select = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($select);

    echo "<table>
    <tr>
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
    <th>ide_prd</th>
    <th>codi_mun</th>
    <th>prices</th>
    </tr>";
    if ($num_rows > 0) {
        while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
            echo "<tr>";
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
            echo "<td>" . $rows['ide_prd'] . "</td>";
            echo "<td>" . $rows['codi_mun'] . "</td>";
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
