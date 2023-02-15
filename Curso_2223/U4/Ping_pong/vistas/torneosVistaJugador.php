<!doctype html>
<html>
<head>
    <link rel='stylesheet' href='../css/torneosVista.css'>
    <title>Torneos</title>
</head>

<body>
    <?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 1);

    require('../negocio/torneosReglasNegocio.php');
        
    $torneosBL = new TorneoReglasNegocio();
    $datosTorneos = $torneosBL->obtener();
    
    echo "<div class='bloque brillo'>
        <table>";

        echo"<tr class='crear'>
            <th colspan='4'></th>
            <th colspan='3'>
                <p>Número de registros: ".count($datosTorneos)."</p>
            </th>
            </tr>
            <tr class='identificador'>
                <th>ID</th>
                <th>Nombre del torneo</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Campeón</th>
            </tr>";

    foreach ($datosTorneos as $torneos){
        
        echo "<tr>";
        echo "<th>".$torneos->getID()."</th>";
        echo "<th><a href='torneoVista.php?id=".$torneos->getID()."'>".$torneos->getNOMBRE()."</a></th>";
        echo "<th>".$torneos->getFECHA()."</th>";
        echo "<th>".$torneos->getESTADO()."</th>";
        echo "<th>".$torneos->getCAMPEON()."</th>";
        echo "</tr>";
    }

    echo "</table>
        </div>";   
    
    ?>
</body>

</html>