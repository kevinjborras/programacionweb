<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "programacion";

$conn = mysqli_connect ($host,$user,$pass,$db);

if(mysqli_erro){

}else {
    echo "conectado";
}

?>