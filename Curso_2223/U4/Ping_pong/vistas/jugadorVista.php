<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../css/jugadorVista.css'>
    <title>Torneos</title>
</head>
<body>
    <?php

    require('../negocio/jugadorVistaReglasNegocio.php');

    $jugadorBL = new JugadorReglasNegocio();
    $datosJugador = $jugadorBL->obtener();

    foreach($datosJugador as $jugador){

        echo "<div class='contenedor'>
    <div class='primera_caja'></div>
    <div class='segunda_caja'>
        <div class='primera_columna'>
            <div class='cube'>
                <div class='top'></div>
                    <div>
                        <span style='--i:0;'></span>
                        <span style='--i:1;'></span>
                        <span style='--i:2;'></span>
                        <span style='--i:3;'></span>
                    </div>
                </div>
        </div>
        <div class='segunda_columna'>
        <div class='bloque brillo'>
    <table>
        <tr>
            <th class='ficha'>Ficha</th>
        </tr>
        <tr class='espacio'></tr>
        <tr>
            <th>Nombre:</th>
            <th>".$jugador->getNOMBRE()."</th>
        </tr>
        <tr>
            <th>Total de partidos jugados:</th>
            <th>".$jugador->getTOTAL_PARTIDOS()."</th>
        </tr>
        <tr>
            <th>Partidos ganados:</th>
            <th>".$jugador->getPARTIDOS_GANADOS()."</th>
        </tr>
        <tr>
            <th>Porcentaje de victorias:</th>
            <th>".$jugador->getPORCENTAJE_VICTORIAS()."%</th>
        </tr>
        <tr>
            <th>Total de torneos disputados:</th>
            <th>".$jugador->getTOTAL_TORNEOS()."</th>
        </tr>
        <tr>
            <th>Torneos ganados:</th>
            <th>".$jugador->getTORNEOS_GANADOS()."</th>
        </tr>
    </table>
</div>
        </div>
        <div class='tercera_columna'>
            <div class='cube'>
                <div class='top'></div>
                <div>
                    <span style='--i:0;'></span>
                    <span style='--i:1;'></span>
                    <span style='--i:2;'></span>
                    <span style='--i:3;'></span>
                </div>
            </div>
        </div>      
    </div>
</div>";

    } 

    ?>
</body>
</html>