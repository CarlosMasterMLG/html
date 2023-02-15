<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>

<body>

    <h1> Porcentajes por género </h1>

    <table>
        <tr>
                <td>Género</td>
                <td>Total de votos de las películas del género </td>
                <td>Porcentaje del género </td>
        </tr>
    
    <?php
        require("./EstadisticaLibrosNegocio.php");
        $estadisticaLibrosNegocio = new EstadisticaLibrosNegocio();
        $datos = $estadisticaLibrosNegocio->obtener();
        print("<div>Votos totales: ".$datos[0]->getVotosTotales()."</div>");
        $descartadas = array();
        foreach ($datos as $dato)
        {
            $porcentaje = $dato->getPorcentaje();
            $nombre_genero = $dato->getNombreGenero();
            if ($porcentaje>0)
            {
                print ("<tr>");
                print("<td>".$nombre_genero."</td>");
                print("<td>".$dato->getVotosPorCategoria()."</td>");
                print("<td>".$porcentaje."%</td>");
                print ("</tr>");
            }
            else
            {
                array_push($descartadas,$nombre_genero);
            }
        }



    ?>
    </table>
    <?php
    print("<div>Géneros descartados por no haber recibido ningún voto:</div>");
        print("<div>");
        print "<ul>";
        foreach ($descartadas as $descarte)
        {
            print "<li>";
            print $descarte;
            print "</li>";
        }
        print "</ul>";
        print("</div>");
    ?>


</body>

</html>