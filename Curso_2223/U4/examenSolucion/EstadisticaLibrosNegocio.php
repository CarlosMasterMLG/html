<?php

require_once("./GenerosAccesoDatos.php");   
require_once ("./LibrosAccesoDatos.php");

class EstadisticaLibrosNegocio
{
    private $_NombreGenero;
    private $_porcentaje; 

    private $_VotosTotales;
    private $_VotosPorCategoria;

	function __construct()
    {
    }

    function init($NombreGenero, 
                  $VotosTotales,
                  $VotosPorCategoria)
    
    {
        $this->_NombreGenero = $NombreGenero;
        $this->_VotosTotales = $VotosTotales;
        $this->_VotosPorCategoria = $VotosPorCategoria;
        $this->_porcentaje = (100*$VotosPorCategoria) / ($VotosTotales);
    }

    function getNombreGenero()
    {
        return $this->_NombreGenero;
    }

    function getVotosTotales()
    {
        return $this->_VotosTotales;
    }

    function getVotosPorCategoria()
    {
        return $this->_VotosPorCategoria;
    }

    function getPorcentaje()
    {
        return $this->_porcentaje;
    }

    function obtener()
    {
        $res = array();
        
        $generosDAL = new GenerosAccesoDatos();
        $librosDAL = new LibrosAccesoDatos();
        $generos = $generosDAL->obtener();

        $total_votos = $librosDAL->obtenerSumaTotalVotos();

        foreach ($generos as $gen)
        {
            $libros_genero = $librosDAL->buscar($gen['ID']);
            $total_votos_genero = 0;
            foreach($libros_genero as $lib)
            {
                $total_votos_genero = $total_votos_genero + $lib['votos'];
            }
            $estadistica = new EstadisticaLibrosNegocio();
            $estadistica->init($gen['genero'],$total_votos,$total_votos_genero);
            array_push($res,$estadistica);
        }

        return $res;
    }
}

