<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/torneoVista.css">
    <title>Torneo</title>
</head>
<body>

<?php

    ini_set('display_errors', 'On');
    ini_set('html_errors', 1);

    require('../negocio/torneoVistaReglasNegocio.php');

    $partidosBL = new PartidoReglasNegocio();
    $datosPartidos = $partidosBL->obtener();

    echo "<div class='contenedor'>

    <div class='caja1'>
        <h1 class='titulo'>TORNEO</h1>
        <a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
    </div>

    <div class='caja2'>
        <div class='borde'></div>
        <div class='primera_ronda'>
            <div class='rondas'>
                <h3>CUARTOS</h3>
            </div>";

    $i = 0;

    foreach($datosPartidos as $partidos){

        echo "<div class='partido1'><a href='jugadorVista.php?jugador=".$partidos->getJUGADOR_A()."'>".$partidos->getJUGADOR_A()."</a></div>
            <div class='partido1'><a href='jugadorVista.php?jugador=".$partidos->getJUGADOR_B()."'>".$partidos->getJUGADOR_B()."</a></div>";
        $i = $i + 1;
        
        if ($i <= 3) {
            echo "<div class='espacio'></div>";
        }
        if ($i > 3) {
            break;
        }
    } 

    echo"</div>
    <div class='borde'></div>
    <div class='segunda_ronda'>
        <div class='rondas'>
            <h3>SEMIFINAL</h3>
        </div>";

    $i = 0;

    foreach($datosPartidos as $partidos){

        echo "<div class='partido2'><a href='jugadorVista.php?jugador=".$partidos->getGANADOR()."'>".$partidos->getGANADOR()."</a></div>";
        $i = $i + 1;

        if ($i <= 3) {
            echo "<div class='espacio2'></div>";
        }
        if ($i > 3) {
            break;
        }
    } 
    
    echo "</div>
    <div class='borde'></div>
    <div class='tercera_ronda'>
        <div class='rondas'>
            <h3>FINAL</h3>
        </div>";

    $i = 0;

    foreach($datosPartidos as $partidos){

        $i = $i + 1;

        if ($i == 5) {
            echo "<div class='partido3'><a href='jugadorVista.php?jugador=".$partidos->getGANADOR()."'>".$partidos->getGANADOR()."</a></div>
            <div class='espacio3'></div>";
        }
        if ($i == 6) {
            echo "<div class='partido3'><a href='jugadorVista.php?jugador=".$partidos->getGANADOR()."'>".$partidos->getGANADOR()."</a></div>";
        }
    }

    echo "</div>
    <div class='borde'></div>
    <div class='cuarta_ronda'>
        <div class='rondas'>
            <h3>CAMPEÓN</h3>
        </div>";
    
    $i = 0;
    
    foreach($datosPartidos as $partidos){

        $i = $i + 1;

        if ($i == 7) {
            echo "<div class='ganador'>
            <a href='jugadorVista.php?jugador=".$partidos->getGANADOR()."'>".$partidos->getGANADOR()."</a>
        </div>";
        }
    }

    echo "</div>
    <div class='borde'></div>
    </div>
    </div>";
?>            
</body>
</html>