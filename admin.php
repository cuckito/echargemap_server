<?php 
session_start();

require_once 'db.php';

echo "admin panel";

if(isset($_POST['submit']))
{
            //$sql = "delete from usuaris where rol='usuari'";
            $sql = "DROP TABLE del";
            $result = mysqli_query ($con, $sql);
            echo "has netejat tota l'estructura";     
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<form name='f' method="post">
<input type='submit' name='submit' value='Delete'>
</form>
</body>
</html>