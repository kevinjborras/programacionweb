<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Area de un Triangulo</title>
    </head>

    <body>
        <h2>Calculo del Area de un triangulo</h2>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <label for="baseID">Base:</label>
            <input type="number" name="base" id="baseID"><br><br>
            <label for="alturaID">Altura:</label>
            <input type="number" name="altura" id="alturaID"><br><br>
            <input type="submit" name="btn" value="Calcular">
            <input type="reset" name="btn" value="Limpiar">
        </form>
    </body>

</html>

<?php


/*Entre comillas es el name del input */

if(isset($_POST['btn']) && $_POST ['btn'] == "Calcular") {
    if(isset($_POST['altura']) && !empty($_POST['altura']) && isset($_POST['base']) && !empty($_POST['base'])){

        if(is_numeric($_POST['altura']) && is_numeric($_POST['base'])) {
            $altura = $_POST['altura'];
            $base = $_POST['base'];
            $area = null;

            $area = ($base * $altura)/2;

            echo "El area es: ", $area;

            unset($altura);
            unset($base);
            unset($area);
            unset($_POST['altura']);
            unset($_POST['base']);
        }
        
    } else {
        echo "Base y/o altura vacios";
    }
}


?>