<?php
session_start();

require_once 'db.php';

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
<!-- The sidebar <a href="#" id="usuarios">Usuarios</a>-->
<div class="sidebar">
  <a class="active">Home</a>
  
  <a>Contact</a>
  <a>About</a>
  <!-- crear un boton llamado usuarios -->
  <input type="submit" name="" value="Buscar" id="boton1" onclick = "funcion();">
</div>

<!-- Page content -->
<div class="content">
<!--<php if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    } else {
        echo "Connected successfully";
    }?>*/-->
  <?php
          $con = mysqli_connect($host, $root, $password, $db);
          if (!$con) {
              die('Could not connect: ' . mysqli_error($con));
          }

          $sql = "SELECT user_id, username, password, name, lastname, mail, location, role FROM users";
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
</div>
</body>
</html>
