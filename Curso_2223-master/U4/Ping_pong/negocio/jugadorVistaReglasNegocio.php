<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

require("../accesoDatos/jugadorVistaAccesoDatos.php");

class JugadorReglasNegocio {
    private $NOMBRE;
    private $TOTAL_PARTIDOS;
    private $PARTIDOS_GANADOS;
    private $TOTAL_TORNEOS;
    private $TORNEOS_GANADOS;
    private $PORCENTAJE_VICTORIAS;

    function __construct() {
    }

    function init($nombre, $totalPartidos, $partidosGanados, $totalTorneos, $torneosGanados, $porcentajeVictorias) {
        $this->NOMBRE = $nombre;
        $this->TOTAL_PARTIDOS = $totalPartidos;
        $this->PARTIDOS_GANADOS = $partidosGanados;
        $this->TOTAL_TORNEOS = $totalTorneos;
        $this->TORNEOS_GANADOS = $torneosGanados;
        $this->PORCENTAJE_VICTORIAS = $porcentajeVictorias;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }
    function getTOTAL_PARTIDOS() {
        return $this->TOTAL_PARTIDOS;
    }
    function getPARTIDOS_GANADOS() {
        return $this->PARTIDOS_GANADOS;
    }
    function getTOTAL_TORNEOS() {
        return $this->TOTAL_TORNEOS;
    }
    function getTORNEOS_GANADOS(){
        return $this->TORNEOS_GANADOS;
    }
    function getPORCENTAJE_VICTORIAS(){
        return $this->PORCENTAJE_VICTORIAS;
    }

    function obtener() {
        $jugadorDAL = new JugadorAccesoDatos();
        $results = $jugadorDAL->obtener();

        $listaJugador =  array();

        foreach ($results as $jugador) {

            $porcentaje = intval(($jugador['partidos_ganados'] / $jugador['total_partidos']) * 100);

            $oJugadorReglasNegocio = new JugadorReglasNegocio();
            $oJugadorReglasNegocio->init($jugador['nombre'], $jugador['total_partidos'], $jugador['partidos_ganados'], $jugador['total_torneos'], $jugador['torneos_ganados'], $porcentaje);
            array_push($listaJugador,$oJugadorReglasNegocio);            
        }
        
        return $listaJugador;
    }
}


?>