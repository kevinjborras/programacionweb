<?php
include_once('conexion.php');

$query = "SELECT * FROM usuarios";

$rs = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));
$count = mysqli_num_rows($rs);

if($count > 0){
    while($fila = mysqli_fetch_assoc($rs)){
        $rows [] = $fila;
    }
    echo json_encode($rows);
}else{
    echo $rows["key"] = 1;
}


?>