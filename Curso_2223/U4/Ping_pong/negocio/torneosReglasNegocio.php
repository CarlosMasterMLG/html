<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

require("../accesoDatos/torneosAccesoDatos.php");

class TorneoReglasNegocio {
    private $ID;
    private $NOMBRE;
    private $FECHA;
    private $ESTADO;
    private $CAMPEON;

    function __construct() {
    }

    function init($id, $nombre, $fecha, $estado, $campeon) {
        $this->ID = $id;
        $this->NOMBRE = $nombre;
        $this->FECHA = $fecha;
        $this->ESTADO = $estado;
        $this->CAMPEON = $campeon;
    }

    function getID() {
        return $this->ID;
    }
    function getNOMBRE() {
        return $this->NOMBRE;
    }
    function getFECHA() {
        return $this->FECHA;
    }
    function getESTADO(){
        return $this->ESTADO;
    }
    function getCAMPEON(){
        return $this->CAMPEON;
    }

    function obtener() {
        $torneosDAL = new TorneoAccesoDatos();
        $results = $torneosDAL->obtener();

        $listaTorneos =  array();

        foreach ($results as $torneo) {
            $oTorneosReglasNegocio = new TorneoReglasNegocio();
            $oTorneosReglasNegocio->init($torneo['id_torneo'], $torneo['nombre'], $torneo['fecha'], $torneo['estado'], $torneo['campeon']);
            array_push($listaTorneos,$oTorneosReglasNegocio);            
        }
        
        return $listaTorneos;
    }
}


?>