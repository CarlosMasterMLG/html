<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../css/gestionTorneosVista.css'>
    <title>Gestion torneos</title>
</head>
<body>

<!--Recibir por GET lo que le paso desde torneosVista,
y en función de lo que reciba pintar una página u otra.
El modo edición es el que ya esta y el modo creación esta
empezado abajo del todo-->



<?php

    ini_set('display_errors', 'On');
    ini_set('html_errors', 1);

    require('../negocio/gestionTorneosVistaReglasNegocio.php');

    $partidosBL = new gestionTorneosVistaReglasNegocio();

    $tipoPagina = $_GET['modo'];
    $idTorneo = $_GET['id'];

    if ($tipoPagina == 'edicion') {

        $datosPartidos = $partidosBL->obtener();
        
        echo ("<div class='bloque brillo'>
                <table>
                    <tr class='nuevo'>
                        <th colspan='4'>
                            <a href=''>Nuevo partido</a>
                        </th>
                        <th colspan='3'>Número de registros: ".count($datosPartidos)."</th>
                    </tr>
                    <tr class='identificador'>
                        <th>ID</th>
                        <th>Jugador A</th>
                        <th>Jugador B</th>
                        <th>Ronda</th>
                        <th>Ganador</th>
                        <th></th>
                        <th></th>
                    </tr>");

                    foreach ($datosPartidos as $partidos){

                        echo "<tr>";
                        echo "<th>".$partidos->getID()."</th>";
                        echo "<th>".$partidos->getJUGADOR_A()."</th>";
                        echo "<th>".$partidos->getJUGADOR_B()."</th>";
                        echo "<th>".$partidos->getRONDA()."</th>";
                        echo "<th>".$partidos->getGANADOR()."</th>";
                        echo "<th><a class='editar' href=''>Editar</a></th>";
                        echo "<th><a class='editar' href=''>Borrar</a></th>";
                        echo "</tr>";

                    }

                echo "</table>
                    </div>";

    } elseif ($tipoPagina == 'creacion') {

        echo("<div class='bloque brillo'>
                <form action='torneosVista.php' method='POST'>
                    <input type='text' name='nombre' required='required'>
                    <span>Nombre</span>
                    <i></i>
                    <input type='date' name='fecha' required='required'>
                    <span>Fecha</span>
                    <i></i>
                    <input type='submit' value='Crear torneo'>
                </form>
            </div>");
    } elseif ($tipoPagina == 'nuevoPartido'){

        echo "
            <div>
                <div>
                    <div>
                        <div>Resultado de partida</div>
                        <form action='gestionTorneosVista.php?' method='POST'>
                            <select name='idJugadorA' id='jugador' required>
                                <option selected='true' disabled='disabled'>Jugador A</option>
                                <option value='1'>Gandalf</option>
                                <option value='2'>Bilbo Bolsón</option>
                                <option value='3'>Aragorn</option>
                                <option value='4'>Tom Bombadil</option>
                                <option value='5'> Cebadilla</option>
                                <option value='6'>Túrin</option>
                                <option value='7'>Melkor</option>
                                <option value='8'>Ilúvatar</option>
                            </select>
                            <select name='idJugadorB' id='jugador' required>
                                <option selected='true' disabled='disabled'>Jugador B</option>
                                <option value='1'>Gandalf</option>
                                <option value='2'>Bilbo Bolsón</option>
                                <option value='3'>Aragorn</option>
                                <option value='4'>Tom Bombadil</option>
                                <option value='5'> Cebadilla</option>
                                <option value='6'>Túrin</option>
                                <option value='7'>Melkor</option>
                                <option value='8'>Ilúvatar</option>
                            </select>
                            <select name='fase' id='jugador' required>
                                <option selected='true' disabled='disabled'>Fase</option>
                                <option value='Semifinales'>Semifinales</option>
                                <option value='Final'>Final</option>
                            </select>
                            <input type='hidden' value='".$idTorneo."' name='idTorneo'>
                            <input class='boton' type = 'submit'>
                        </form>
                        <a href='javascript:history.go(-1)'>VOLVER ATRÁS</a>";
                        if(isset($error)){
                            print("<div class='pie'>Introduce los datos correctamente.</div>");
                        }                                                    
        echo "      </div>
                </div>
            </div>";

    }

?>

    
</body>
</html>