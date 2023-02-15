<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Desarrollo de aplicaciones web en entorno servidor</title> 
</head>
<body>

<div>
    <?php

    $x = validarParametroName();

    echo $str;

        function validarParametroName($name){
            $res = "-";
            $name = htmlspecialchars($_GET["name"]);

            $existe_parametro = contieneClave($name, $_GET);

            if ($existe_parametro){

                if (isset($name)){
                    $res = $name;
    
                return $res;

                }
            }
            
        }

        //faltaria una funcion contieneClave

    ?>
</div>

</body>
</html>

