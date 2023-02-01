<!-- Inicio del programa -->
<!-- Ejecutar desde command line o shell -->
<!-- Inicialización de variables -->
<?php
$total_femenino = 0;
$total_hombres_casados_2500 = 0;
$total_mujeres_viudas_1000 = 0;
$suma_edad_hombres = 0;
$cantidad_hombres = 0;

// Se realiza un ciclo para ingresar los datos de cada empleado
for ($i = 0; $i < 5; $i++) {
    // Ingreso de datos
    $nombre = readline("Ingrese nombre: ");
    readline_add_history($nombre);

    $apellido = readline("Ingrese apellido: ");
    readline_add_history($apellido);

    $edad = readline("Ingrese edad: ");
    readline_add_history($edad);

    $estado_civil = readline("Ingrese estado civil (soltero, casado, viudo): ");
    readline_add_history($estado_civil);

    $sexo = readline("Ingrese sexo (masculino o femenino): ");
    readline_add_history($sexo);

    $sueldo = readline("Ingrese sueldo (en Bs): ");
    readline_add_history($sueldo);

    // Se verifica si el empleado es femenino
    if ($sexo == "femenino") {
        $total_femenino++;
    }

    // Se verifica si el empleado es hombre casado y gana más de 2500 Bs
    if ($sexo == "masculino" && $estado_civil == "casado" && $sueldo > 2500) {
        $total_hombres_casados_2500++;
    }

    // Se verifica si la empleada es viuda y gana más de 1000 Bs
    if ($sexo == "femenino" && $estado_civil == "viudo" && $sueldo > 1000) {
        $total_mujeres_viudas_1000++;
    }

    // Se verifica si el empleado es hombre para calcular la edad promedio
    if ($sexo == "masculino") {
        $suma_edad_hombres += $edad;
        $cantidad_hombres++;
    }
}

// Se calcula la edad promedio de los hombres
if ($cantidad_hombres > 0) {
    $edad_promedio_hombres = $suma_edad_hombres / $cantidad_hombres;
} else {
    $edad_promedio_hombres = 0;
}

// Se imprimen los resultados
echo "Total de empleados del sexo femenino: $total_femenino\n";
echo "Total de hombres casados que ganan más de 2500 Bs: $total_hombres_casados_2500\n";
echo "Total de mujeres viudas que ganan más de 1000 Bs: $total_mujeres_viudas_1000\n";
echo "Edad promedio de los hombres: $edad_promedio_hombres";
?>