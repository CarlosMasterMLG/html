window.onload = init;

function init() {
    
    let p = document.createElement("label");
    let contenido = document.createTextNode("Tria un país:");
    p.appendChild(contenido);
    document.body.appendChild(p);

    let select = document.createElement("select");
 
    let option1 = document.createElement("option");
    option1.setAttribute("value", "value1");
    let option1Texto = document.createTextNode("opcion 1");
    option1.appendChild(option1Texto);
        
    let option2 = document.createElement("option");
    option2.setAttribute("value", "value2");
    let option2Texto = document.createTextNode("opcion 2");
    option2.appendChild(option2Texto);
        
    let option3 = document.createElement("option");
    option3.setAttribute("value", "value3");
    let option3Texto = document.createTextNode("opcion 3");
    option3.appendChild(option3Texto);
        
    select.appendChild(option1);
    select.appendChild(option2);
    select.appendChild(option3);
    
    document.body.appendChild(select);

    let p2 = document.createElement("p");
    let contenido2 = document.createTextNode("Tria una ciutat:");
    p2.appendChild(contenido2);
    document.body.appendChild(p2);


    let select2 = document.createElement("select");
 
    let option = document.createElement("option");
    option.setAttribute("value", "value");
    let optionTexto = document.createTextNode("opcion 1");
    option.appendChild(optionTexto);

    select2.appendChild(option);
    document.body.appendChild(select2);
    
}




function metodoPrueba() {

    const xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onload = function () {

            document.getElementById("prueba").innerHTML = "funciona esto";
            /*x = document.getElementById('pais');
            x.getElementsByTagName('option').innerHTML = 'Prueba';*/

            select = document.getElementsByTagName("select")[2];
            option4.setAttribute("value", "value4");
            let option4Texto = document.createTextNode("opcion 4");
            select.appendChild(option4Texto);

            document.body.appendChild(select);
     
            


        }

        xmlhttp.open("GET", "act3.php");
        xmlhttp.send();
    
}
