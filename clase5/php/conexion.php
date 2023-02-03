<?php

include_once('php/conexion.php');

$host = "locahost";
$user = "root";
$pass = "";
$db = "programacion";

$conn = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
    echo "Error de conexion" . mysqli_connect_error();
}else{
    //echo "Conectada";
}

?>