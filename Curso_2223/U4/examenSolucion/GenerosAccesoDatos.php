
<?php

class GenerosAccesoDatos
{
	
	function __construct(){
    }

	function obtener(){
		$conexion = mysqli_connect('localhost','root','');
		if (mysqli_connect_errno()){
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
        
 		mysqli_select_db($conexion, 'examenes');
		$consulta = mysqli_prepare($conexion, "select ID,genero from generos");
        $consulta->execute();
        return $consulta->get_result();
	}
}