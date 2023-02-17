<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
    
    // contraseña en clase 12345 pero en casa es 1234
    $conexion = mysqli_connect('localhost', 'root', '12345');
    mysqli_select_db($conexion, 'world');
    $consultaCiudades = mysqli_prepare($conexion, "SELECT Name FROM country order by Name;");
    $consultaCiudades->execute();
    $resultado = $consultaCiudades->get_result();

    $arrayCiudades = array();

    while ($myrow = $resultado->fetch_assoc()) {

        array_push($arrayCiudades, $myrow);

    }

    $nombreCiudad = strtolower($_REQUEST["prueba"]);
    $hint = "<select style='width: 300px;' name='pais' id='pais' onchange='mostrarPaises(this.value)'>";

    if ($nombreCiudad !== "") {

        $len = strlen($nombreCiudad);

        for ($i=0; $i < $nombreCiudad; $i++) { 
            # code...
        }

            if (stristr($nombreCiudad, substr($name['Name'], 0, $len))) {

                if ($hint === "") {

                    $hint = $name['Name'];

                } else {

                    $hint = $name['Name'];

                }
            }
        
    }

    echo $hint === "" ? "No hay resultados" : $hint;
?>