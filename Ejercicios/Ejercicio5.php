<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
</head>
<body>
<h3>Ejercicio 5 </h3>
    <p>Muestra por pantalla los 50 primeros numeros primos</p>

    <?php
    
    $num = 2;
    $numerosPrimos = 0;
    echo "<ol>";
        while($numerosPrimos < 50) {
            $esPrimo = true;

            for ($i = 2; $i < $num; $i++) {
                if( $num % $i == 0 ){
                    
                    //No es primo
                    $esPrimo=false;
                    break;
            }
        }
        if($esPrimo) {
            $numerosPrimos++;
            echo "<li>$num</li>";   
        }
        $num++;

    }
    echo"</ol>";

    ?>

    

    
</body>
</html>