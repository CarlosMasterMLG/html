
<?php

class LibrosAccesoDatos
{
	function __construct()
    {
    }

	function obtenerSumaTotalVotos()
	{
		$conexion = mysqli_connect('localhost','root','');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}

		mysqli_select_db($conexion, 'examenes');
        $consulta = mysqli_prepare($conexion, "select sum(votos) as suma from libros;");
        $consulta->execute();
        $res = $consulta->get_result();

		$myrow = $res->fetch_assoc();
        $suma = $myrow['suma'];

		return $suma;
	}

	function buscar($genero)
	{
		$conexion = mysqli_connect('localhost','root','');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}

		mysqli_select_db($conexion, 'examenes');
		$cadena_consulta_SQL = "SELECT lib.ID,lib.titulo,lib.votos,lib.id_genero FROM libros lib "; 
		if (isset($genero))
		{
			$cadena_consulta_SQL.=" where lib.id_genero= ? ";
		}

		$consulta = mysqli_prepare($conexion, $cadena_consulta_SQL);
		if (isset($genero))
		{
			$sanitized_genero = mysqli_real_escape_string($conexion, $genero);       
			$consulta->bind_param("i", $sanitized_genero);
		}
		
		$consulta->execute();
		$res = $consulta->get_result();
		$libros =  array();
		while ($myrow = $res->fetch_assoc()) 
		{
			array_push($libros,$myrow);

		}
		return $libros;
	}

}




















