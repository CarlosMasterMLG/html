<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

class JugadorAccesoDatos {        
    function __construct() {
    }

    function obtener() {
        // contraseña sql en casa->1234 | en clase->12345
        $conexion = mysqli_connect('localhost','root','12345');

        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }

        $nombreJugador = $_GET['jugador'];

        mysqli_select_db($conexion, 'torneos_pingPong');
        
        $consulta = mysqli_prepare($conexion, "SELECT 
                                                    nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados
                                                FROM
                                                    T_Jugador
                                                WHERE 
                                                    nombre = '".$nombreJugador."';");
        
        $consulta->execute();
        $result = $consulta->get_result();

        $jugador =  array();

        while ($myrow = $result->fetch_assoc()) {

            array_push($jugador, $myrow);
        }

        return $jugador;
    }
}
?>

