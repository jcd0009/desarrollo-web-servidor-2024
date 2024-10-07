<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>

    //Calcular la suma de los numeros pares entre 1 y 20

    <?php
    $contador = 1;
    $numeroAlmacenado = 0;

    while ($contador <= 20) {
        // Verificar si el numero es multiplo de 3
        if ($contador % 2 == 0) {
            $numeroAlmacenado += $contador;
        }
        $contador++;
    }

    echo "<p> La suma de los numeros pares entre 1 y 20 es $numeroAlmacenado</p>"
        ?>

</body>

</html>