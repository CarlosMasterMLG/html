<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

class partidoAccesoDatos {        
    function __construct() {
    }

    function obtener() {
        // contraseña sql en casa->1234 | en clase->12345
        $conexion = mysqli_connect('localhost','root','12345');

        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }


        if (isset($_GET['id'])) {
            $idTorneo = $_GET['id'];

            mysqli_select_db($conexion, 'torneos_pingPong');
        $consulta = mysqli_prepare($conexion, "SELECT 
                                                    id_torneo,
                                                    id_partido,
                                                    jugador_a,
                                                    jugador_b,
                                                    tipo_partido,
                                                    ganador
                                                FROM
                                                    T_Partido 
                                                WHERE 
                                                    id_torneo = $idTorneo;");
        
        $consulta->execute();
        $result = $consulta->get_result();

        $partidos = array();

        while ($myrow = $result->fetch_assoc()) {

            array_push($partidos, $myrow);
        }

        return $partidos;
        }
    }
}
?>

