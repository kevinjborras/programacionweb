<?php

include_once('conexion.php');

if(isset($_POST['btn']) && $_POST ['btn'] == "Guardar") {

    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $correo = $_POST ['correo'];
    $clave = md5($_POST ['clave']);

    $query = "INSERT INTO (nombre,apellido,correo,clave) values ('$nombre','$apellido', '$correo', '$clave')";
    $rs = mysqli_query($conn, $query) or die (mysqli_error($conn));

    if ($rs ==true) {
        header ('Location: ../usuarios.php');
    }


}

?>