<?php
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

    $nombreCiudad = strtolower($_REQUEST["ciudad"]);
    $hint = "<select style='width: 300px;' name='pais' id='pais' onchange='mostrarPaises(this.value)'>";

    if ($nombreCiudad !== "") {

        $len = strlen($nombreCiudad);

        foreach ($arrayCiudades as $name) {

            if (stristr($nombreCiudad, substr($name['Name'], 0, $len))) {

                if ($hint === "") {

                    $hint = $name['Name'];

                } else {

                    $hint .= "<tr><td>".$name['Name']."</td></tr>";

                }
            }
        }
    }

    echo $hint === "" ? "No hay resultados" : $hint;
?>