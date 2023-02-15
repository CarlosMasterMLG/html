<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ejercicio la canción del sapo</title> 
</head>
<body>

<div>
    <?php

        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        $frase = "el sapo no se lava el pie...";
        $vocales = array("a", "e", "i", "o", "u");
        
        echo $frase;
        
        function escribir_frase($frase, $vocales){

            $resultado = "";

            for ($i=0; $i < count($vocales); $i++) { 
                $resultado = $resultado . "<br>" . str_replace($vocales, $vocales[$i], $frase);
             
            }
            return $resultado;
        }

        echo escribir_frase($frase, $vocales);
    ?>
</div>

</body>
</html>

