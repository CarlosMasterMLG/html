<?php
    // contraseña en clase 12345 pero en casa es 1234
    $conexion = mysqli_connect('localhost', 'root', '12345');
    mysqli_select_db($conexion, 'world');
    $consulta = mysqli_prepare($conexion, "SELECT Name FROM city;");
    $consulta->execute();
    $result = $consulta->get_result();

    $arrayCiudades = array();

    while ($myrow = $result->fetch_assoc()) {

        array_push($arrayCiudades, $myrow);

    }

    $nombreCiudad = strtolower($_REQUEST["ciudad"]);
    $hint = "";

    if ($nombreCiudad !== "") {

        $len = strlen($nombreCiudad);

        foreach ($arrayCiudades as $a) {

            if (stristr($nombreCiudad, substr($a['Name'], 0, $len))) {

                if ($hint === "") {

                    $hint = $a['Name'];

                } else {

                    $hint .= ", " . $a['Name'];

                }
            }
        }
    }

    echo $hint === "" ? "No hay resultados" : $hint;
?>