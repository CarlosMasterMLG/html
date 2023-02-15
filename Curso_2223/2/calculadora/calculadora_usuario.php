<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Usuario</title>
</head>
<body>
    <h1>Calculadora que calcula calculos</h1>
    
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        require "calculadora.php";
    
        $numero = 6;
        $n = 5;
        $k = 2;

        $calculadora = new Calculadora;

        if (isset($numero)){
            echo "El factorial de $numero es " , $calculadora->obtenerFactorial($numero);
        } else {
            echo "Variable numero no declarada.";
        }

        
        echo "<br><br>El coeficiente binominial de $n y $k es " . $calculadora->coeficienteBinominial($n, $k);
        

        $binario = 1000;
        echo "<br><br>" . $binario . " en decimal es " . $calculadora->convierteBinarioDecimal($binario);

        $arrayNumeros = array(1,2,3,4,5,6,7,8,9,10);

        echo "<br><br>La suma de los números pares del array es: " . $calculadora->sumaNumerosPares($arrayNumeros);

        $palabra1 = "arroz";
        $palabra2 = "zorra";

        if ($calculadora->esPalindromo($palabra1, $palabra2) == 1) {
            echo "<br><br>" . $palabra1 . " y " . $palabra2 . " son palindromos";
        } else {
            echo "<br><br>" . $palabra1 . " y " . $palabra2 . " no son palindromos";
        }

        $matriz1 = array(
            array(2, 0, 1),
            array(3, 0, 0),
            array(5, 1, 1)
        );
        $matriz2 = array(
            array(1, 0, 1),
            array(1, 2, 1),
            array(1, 1, 0)
        );

        echo "<br><br>La matriz con el resultado de sumar las dos anteriores es:<br>";

        $sumaMatrices = $calculadora->sumaMatrices($matriz1, $matriz2);

        for ($i=0; $i < count($sumaMatrices); $i++) { 
            
            for ($j=0; $j < count($sumaMatrices[$i]); $j++) { 
                
                echo $sumaMatrices[$i][$j] . "\t";
                
            }

            echo "<br>";

        }

    ?>
    
</body>
</html>