<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excepción</title>
</head>
<body>
    
<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    try {
        echo 500/0;
    } catch (DivisionByZeroError $e) {
        echo "$e"; //Con '' pone tal cual lo que pones, 
                        //con "" pone el valor de $e que es la exepcion.
    }

?>

</body>
</html>