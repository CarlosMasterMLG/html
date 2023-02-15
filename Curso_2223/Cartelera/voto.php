<html>
<head>
    <title>Voto</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='shortut icon' type='image/png' href='imgs/check-lg.svg' sizes='32x32'>
</head>
<body>
    
    <?php

        $id = $_POST['id'];
        $voto = $_POST['voto'];

        if ($voto != 'default') {
            
            $ssql = "update T_Peliculas set votos=votos+1 where T_Peliculas.ID='$id'";

            // Contraseña->Casa: 12345678 | Clase: 12345
            $conexion = mysqli_connect('localhost', 'root', '12345678');
            
            mysqli_select_db($conexion, 'cartelera');
            
            $consulta = $ssql;
           
            $resultado = mysqli_query($conexion, $consulta);

            if (!$resultado) {
                $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                $mensaje = 'Consulta realizada: ' . $consulta;
                die($mensaje);
            } else{

                echo "  <div class='contenedor'>
                    <div class='primera_caja'></div>
                    <div class='segunda_caja'>
                        <div class='primera_columna'>
                        </div>
                    <div class='segunda_columna'>
                        <h1>Voto guardado</h1>
                        <a href='index.php'>Inicio</a>
                    </div>
                    <div class='tercera_columna'>
                    </div>      
                    </div>
                <div>";
            }
        } else {

            echo "  <div class='contenedor'>
                    <div class='primera_caja'></div>
                    <div class='segunda_caja'>
                        <div class='primera_columna'>
                        </div>
                    <div class='segunda_columna'>
                        <h1>No se ha guardado el voto</h1>
                        <a href='index.php'>Inicio</a>
                    </div>
                    <div class='tercera_columna'>
                    </div>      
                    </div>
                <div>";
        }
        
    ?>

</body>
</html>