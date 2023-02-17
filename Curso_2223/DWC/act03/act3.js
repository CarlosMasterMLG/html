function mostrarPaises(str) {

    if (str.length == 0) {

        document.getElementById("resultadoDevuelto").innerHTML = "";
        return;

    } else {

        const xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onload = function () {

            document.getElementById("resultadoDevuelto").innerHTML = this.responseText;

        }

        xmlhttp.open("GET", "act2.php?" + str);
        xmlhttp.send();
    }
}


function mostrarCiudades(str) {

    if (str.length == 0) {

        document.getElementById("resultadoDevuelto").innerHTML = "";
        return;

    } else {

        const xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onload = function () {

            document.getElementById("resultadoDevuelto").innerHTML = this.responseText;

        }

        xmlhttp.open("GET", "act3.php");
        xmlhttp.send();
    }
}