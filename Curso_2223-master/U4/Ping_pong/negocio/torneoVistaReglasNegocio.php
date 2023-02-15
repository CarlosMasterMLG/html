<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

require("../accesoDatos/torneoVistaAccesoDatos.php");

class PartidoReglasNegocio {
    private $ID_PARTIDO;
    private $ID_TORNEO;
    private $TIPO_PARTIDO;
    private $JUGADOR_A;
    private $JUGADOR_B;
    private $GANADOR;

    function __construct() {
    }

    function init($idPartido, $idTorneo, $tipoPartido, $jugadorA, $jugadorB, $ganador) {
        $this->ID_PARTIDO = $idPartido;
        $this->ID_TORNEO = $idTorneo;
        $this->TIPO_PARTIDO = $tipoPartido;
        $this->JUGADOR_A = $jugadorA;
        $this->JUGADOR_B = $jugadorB;
        $this->GANADOR = $ganador;
    }

    function getID_PARTIDO() {
        return $this->ID_PARTIDO;
    }
    function getID_TORNEO() {
        return $this->ID_TORNEO;
    }
    function getTIPO_PARTIDO() {
        return $this->TIPO_PARTIDO;
    }
    function getJUGADOR_A() {
        return $this->JUGADOR_A;
    }
    function getJUGADOR_B(){
        return $this->JUGADOR_B;
    }
    function getGANADOR(){
        return $this->GANADOR;
    }

    function obtener() {
        $partidosDAL = new PartidoAccesoDatos();
        $results = $partidosDAL->obtener();

        $listaPartidos =  array();

        foreach ($results as $partidos) {
            $oPartidosReglasNegocio = new PartidoReglasNegocio();
            $oPartidosReglasNegocio->init($partidos['id_partido'], $partidos['id_torneo'], $partidos['tipo_partido'], $partidos['jugador_a'], $partidos['jugador_b'], $partidos['ganador']);
            array_push($listaPartidos,$oPartidosReglasNegocio);            
        }
        
        return $listaPartidos;
    }
}


?>