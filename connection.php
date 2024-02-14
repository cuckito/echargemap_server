<?php

$host = "localhost"; //IP BASE DE DATOS
$root = "admin_web"; //USUARIO BASE DE DATOS
$password = "PASSWORD*"; //CONTRASEÑA BASE DE DATOS
$db = "echargemap"; //NOMBRE DE LA BASE DE DATOS

$con = new mysqli($host, $root, $password, $db);
$con->query("SET NAMES utf8mb4");

// Check connection
if ($con->connect_error) {
    die("Connection failed". $con->connect_error);
}
?>
