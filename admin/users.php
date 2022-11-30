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
<!-- sidebar -->
<div class="sidebar">
  <a class="active" href="adpanel.php">Admin panel</a>
  <a href="users.php" id="users">Visualizar usuarios</a>
  <a href="stations.php" id="stations">Visualizar estacions</a>
  <a href="logout.php" id="logout">Cerrar sesion</a>
</div>

<!-- contenido -->
<div class="content">
  <h2>Visualizar usuarios</h2>
  <p>Introduce el username del usuario que quieres borrar</p>
  <form name='f' method="post">
  <input type="text" name="username" />
  <input type='submit' name='userdel' value='Delete user'><br>
  </form>
  <?php
  if(isset($_POST['userdel']))
  {
    $username = $_POST['username'];
    $sql = "DELETE FROM Users WHERE username='$username'";
    $result = mysqli_query ($con, $sql);
    echo "<b>Se ha borrado el usuario: $username</b>";
  }
  ?>
  <br>  
  <?php
         $con = mysqli_connect($host, $root, $password, $db);
         if (!$con) {
             die('Could not connect: ' . mysqli_error($con));
         }

         $sql = "SELECT * FROM Users";
         $select = mysqli_query($con, $sql);
         $num_rows = mysqli_num_rows($select);
         //echo "Number of rows : ";
         //echo $num_rows;

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
