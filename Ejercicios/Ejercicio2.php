<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: multiplos de 3</title>
</head>

<body>

    <?php

    $numero = 1;

    while ($numero <= 30) {
        // Verificar si el numero es multiplo de 3
        if ($numero % 3 == 0) {
            echo "<p> El número $numero es múltiplo de 3. <br> </p>";
        }
        $numero++;
    }

    ?>


</body>

</html>