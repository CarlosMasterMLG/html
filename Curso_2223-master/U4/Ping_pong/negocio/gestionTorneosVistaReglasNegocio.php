<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

require("../accesoDatos/gestionTorneosVistaAccesoDatos.php");

class gestionTorneosVistaReglasNegocio {

    private $ID_TORNEO;
    private $ID;
    private $JUGADOR_A;
    private $JUGADOR_B;
    private $RONDA;
    private $GANADOR;


    function __construct() {
    }

    function init($idTorneo, $id, $jugadorA, $jugadorB, $ronda, $ganador) {
        $this->ID_TORNEO = $idTorneo;
        $this->ID = $id;
        $this->JUGADOR_A = $jugadorA;
        $this->JUGADOR_B = $jugadorB;
        $this->RONDA = $ronda;
        $this->GANADOR = $ganador;
    }

    function getID_TORNEO() {
        return $this->ID_TORNEO;
    }
    function getID() {
        return $this->ID;
    }
    function getJUGADOR_A() {
        return $this->JUGADOR_A;
    }
    function getJUGADOR_B() {
        return $this->JUGADOR_B;
    }
    function getRONDA(){
        return $this->RONDA;
    }
    function getGANADOR(){
        return $this->GANADOR;
    }

    function obtener() {

        $partidosDAL = new partidoAccesoDatos();
        $resultadosPartido = $partidosDAL->obtener();

        $listaPartidos = array();

        foreach($resultadosPartido as $partidos){

            $oGestionTorneosReglasNegocio = new gestionTorneosVistaReglasNegocio();
            $oGestionTorneosReglasNegocio->init($partidos['id_torneo'], $partidos['id_partido'], $partidos['jugador_a'], $partidos['jugador_b'], $partidos['tipo_partido'], $partidos['ganador']);
            array_push($listaPartidos, $oGestionTorneosReglasNegocio);

        }

        return $listaPartidos;

    }
}


?>