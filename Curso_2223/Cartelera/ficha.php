<html>
<head>
    <?php
        $style;
        $icon;
        $numFicha = $_GET['ficha'];

        if ($numFicha<11) {
            $style = 'styleFichaTerror';
            $icon = 'imgs/terror/icon/ghostface_icon.png';
        }else{
            $style = 'styleFichaFiccion';
            $icon = 'imgs/ciencia_ficción/icon/darthvader_icon.png';
    }

    ?>
    <title>FICHA</title>
    <link rel="stylesheet" href="<?php echo $style?>.css">
    <link rel="shortut icon" type="image/png" href="<?php echo $icon?>" sizes="32x32">
</head>
<body>
    
        <?php

        require('funcionalidades.php');

        try {
            pintarFicha();
        } catch (Exception $e) {
            echo "<div class='contenedor_error'>   
                    <H1 class='texto_error'>Ha ocurrido un error inesperado.</H1>
                    <H1 class='texto_error'>Pongase en contacto con el administrador de la página.</H1>
                </div>";
            die();
        }
        
        
        ?>
        
</body>
</html>