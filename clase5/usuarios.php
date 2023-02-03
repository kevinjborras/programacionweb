<?php


include_once('php/conexion.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuarios</h2>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM usuarios";
            $rs = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $total_rows = mysqli_num_rows($rs);
            // $rows = mysqli_fetch_array($rs);
            if($total_rows > 0 ) {
                while ($rows = mysqli_fetch_array($rs)){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['nombre'];?></td>
                        <td><?php echo $rows['apellido'];?></td>
                        <td><?php echo $rows['correo'];?></td>
                    </tr>
            <?php  
                }
            }else{
                ?>
                    <tr>
                        <td colspan="4">No hay Regitros en la base de datos</td>
                    </tr>
            <?php
            }

            ?>



        </tbody>
    </table>
    <br>
    <a href="addusuario.php">Agregar nuevo usuario</a>
    
</body>
</html>