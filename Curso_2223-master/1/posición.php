<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posición</title>
</head>
<body>

    <div>

    <?php
    $numeros = [10,20,30,40,50];

    $localizar = 20;

    for ($i=0; $i < count($numeros); $i++) { 

        if ($localizar == $numeros[$i]) {
            
            echo $localizar, " aparece por primera vez en la posición ", $i;

            break;
        }

    }
    
    ?>
    </div>

</body>
</html>