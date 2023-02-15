function showHint(str) {

    if (str.length == 0) {

        document.getElementById("resultadoDevuelto").innerHTML = "";
        return;

    } else {

        const xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onload = function () {

            document.getElementById("resultadoDevuelto").innerHTML = this.responseText;

        }

        xmlhttp.open("GET", "act1.php?ciudad=" + str);
        xmlhttp.send();
    }
}
