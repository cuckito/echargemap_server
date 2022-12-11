<?php
  session_start();

  require_once 'connection.php';

    if (isset($_POST['username'], $_POST['password'])) { 

        $user = $_POST['username'];
        $password = $_POST['password'];
    
        $query = "SELECT * FROM Users WHERE username = '$user' AND password = '$password' LIMIT 1";

        if($result = $con->query($query) ){
            if ($result->num_rows > 0) {
                
                while ($row = $result->fetch_array()) {
                    
                    session_regenerate_id();
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['user_id'] = $row['user_id'];
                    
                    if (!isset($_SESSION['loggedin'])) {
                        header('Location: index.php');
                        exit;
                    }

                    if($row['role']==0){
                        echo "Ha entrado";
                        header('Location: admin/adpanel.php');
                    }elseif($row['role']==1){
                        header("location: index.php");
                    }
                }
            }else{
                echo "Usuario no encontrado";
            }
        }else{
            echo "Usuario no encontrado";
        }
    }
        
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
        <form action="index.php" method="post">
            <br>Admin user:
            <input type='text' name='username'/>
            
            <br>Password user:
            <input type='password' name='password' />

            <br>
            <input name='enviar' type='submit' value='Accedir' />
        </form>
</body>
</html>
