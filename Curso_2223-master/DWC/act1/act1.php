<?php
ini_set('html_errors', 1);
ini_set('display_errors', 1);

$conexion = mysqli_connect('localhost', 'root', '1234');
mysqli_select_db($conexion, 'world');
$consulta = mysqli_prepare($conexion, "SELECT Name FROM city ORDER BY Name ASC;");

$consulta->execute();
$result = $consulta->get_result();

$arrayNombres = array();

while ($myrow = $result->fetch_assoc()) {

    array_push($arrayNombres, $myrow);

}

$nombre = $_REQUEST["nombre"];
$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {

  $q = strtolower($q);
  $len=strlen($q);

  foreach($q as $nombre) {
    if (stristr($q, substr($nombre, 0, $len))) {
      if ($hint === "") {
        $hint = $nombre;
      } else {
        $hint .= ", $nombre";
      }
    }
  }
}
// prueba git
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
