<?php
  session_start();

  require_once 'db.php';

    if (isset($_POST['username'], $_POST['password'])) { 

        $user = $_POST['username'];
        $password = $_POST['password'];
    
        $query = "SELECT * FROM Users WHERE username = '$user' AND password = '$password' LIMIT 1";

        //$result = $con->query($query);

        //print_r($result);
        //echo $query;
        if($result = $con->query($query) ){
            if ($result->num_rows > 0) {
                
                while ($row = $result->fetch_array()) { //LOOP EN BUSCA DE LAS FILAS
                    
                    session_regenerate_id();
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['user_id'] = $row['user_id'];

                    /*echo $_SESSION['rol'];
                    echo $_SESSION['user'];
                    echo $_SESSION['loggedin'];*/

                    //header("location: home.php");
                    
                    if (!isset($_SESSION['loggedin'])) {
                        header('Location: index.php');
                        exit;
                    }

                    if($row['role']==0){
                        echo "Ha entrado";
                        header('Location: adpanel.php');
                    }elseif($row['role']==1){
                        header("location: profile.php");
                    }
                }
            }else{
                echo "este user no está";
            }
        }else{
            echo "user not found";
        }
    }
        
?>
<!DOCTYPE html>
<html>
<body>
        <form action="index.php" method="post">
            <br>Login:
            <input type='text' name='username'/>
            
            <br>Password:
            <input type='password' name='password' />

            <br>
            <input name='enviar' type='submit' value='Accedir' />
        </form>
</body>
</html>