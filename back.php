<?php
include("connection.php");

$data=json_decode(file_get_contents('php://input'), true);
//print_r($data);
if($data['method']=='login'){
    include("login.php");
    //login
}else if($data['method']=='register'){
    include("register.php");
}else if($data['method']=='readuser'){
    include("readuser.php");
}else if($data['method']=='updateuser'){
    include("updateuser.php");
}else if($data['method']=='deluser'){
    include("deluser.php");
}else{
    echo "Introduce un metodo valido";
}
//else if(isset($_POST['']))}
?>