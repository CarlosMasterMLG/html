<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

require("../accesoDatos/usuarioAccesoDatos.php");

class UsuarioReglasNegocio
{

	function __construct()
    {
    }
    function verificar($usuario, $clave)
    {
        $usuariosDAL = new UsuarioAccesoDatos();
        $res = $usuariosDAL->verificar($usuario,$clave);
        
        return $res;
        
    }
}
