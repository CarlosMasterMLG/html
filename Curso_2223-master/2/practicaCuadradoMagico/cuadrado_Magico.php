<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado Mágico</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>

<?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        $cuadrado = array(
        array(4, 9, 2),
        array(3, 5, 7),
        array(8, 1, 1)
        );

        function dibujarMatriz($cuadrado){

            $tablaHTML = "<table>";

            for ($i=0; $i < count($cuadrado); $i++) { 
                
                $tablaHTML = $tablaHTML . "<tr>";

                for ($j=0; $j < count($cuadrado[$i]); $j++) { 
                    
                    $tablaHTML = $tablaHTML . "<td>" . $cuadrado[$i][$j] . "</td>";
                    
                }
                $tablaHTML = $tablaHTML . "</tr>";
            }
            $tablaHTML = $tablaHTML . "</table>";

            return $tablaHTML;

        }

        function analizarCuadradoMagico($cuadrado){

            $fraseResultado = "";
            $fraseFila1 = "Respecto a la suma de la primera fila que es ";
            $fila1 = 0;
            $filasDiferentes = "";
            $columnasDiferentes = "";
            $diagonalesDiferentes = "";
            $sumaDiagonalPrincipal = 0;
            $sumaDiagonalSecundaria = 0;
            $fraseNoEsCuadradoMagico = "<h1 class='noEsCuadradoMagico'>No es un cuadrado mágico</h1>";
            $fraseSiEsCuadradoMagico = "<h1 class='siEsCuadradoMagico'>Sí es un cuadrado mágico</h1>";
            $contadorDistintos = 0;

            for ($i=0; $i < count($cuadrado); $i++) { 

                $sumaFila = 0;
                $sumaColumna = 0;
                
                for ($j=0; $j < count($cuadrado[$i]); $j++) { 

                    $sumaFila = $sumaFila + $cuadrado[$i][$j];
                    $sumaColumna = $sumaColumna + $cuadrado[$j][$i];

                    if ($i == $j) {
                        $sumaDiagonalSecundaria = $sumaDiagonalSecundaria + $cuadrado[$i][$j];
                    }

                    if ($i + $j == count($cuadrado)-1) {
                        $sumaDiagonalPrincipal = $sumaDiagonalPrincipal + $cuadrado[$i][$j];
                    }

                }

                if ($i == 0) {
                    $fila1 = $sumaFila;
                }
                if ($sumaFila != $fila1) {
                    $filasDiferentes = $filasDiferentes . "<br><br>Fila ". ($i + 1);
                    $contadorDistintos = $contadorDistintos + 1;
                }
                
                if ($sumaColumna != $fila1) {
                    $columnasDiferentes = $columnasDiferentes . "<br><br>Columna ". ($i + 1);
                    $contadorDistintos = $contadorDistintos + 1;
                }
            }
            if ($sumaDiagonalPrincipal != $fila1) {
                $diagonalesDiferentes = $diagonalesDiferentes . "<br><br>Diagonal principal";
                $contadorDistintos = $contadorDistintos + 1;
            }
            if ($sumaDiagonalSecundaria != $fila1) {
                $diagonalesDiferentes = $diagonalesDiferentes . "<br><br>Diagonal secundaria";
                $contadorDistintos = $contadorDistintos + 1;
            }
            if ($contadorDistintos == 0) {
                
                $fraseResultado = "<br><br>$fraseSiEsCuadradoMagico La suma de cada fila, columna y diagonal da:  $sumaFila";

            } else {
                $fraseResultado = "<br><br>$fraseNoEsCuadradoMagico" . $fraseFila1 . $fila1 . ",<br><br>Las filas diferentes a $fila1 son: 
                    $filasDiferentes<br><br>Las columas diferentes a $fila1 son:$columnasDiferentes <br><br>Las diagonales diferentes a $fila1 son: $diagonalesDiferentes";
            }

            return $fraseResultado;

        }

        echo dibujarMatriz($cuadrado);
        echo analizarCuadradoMagico($cuadrado);

    ?>
    
</body>
</html>