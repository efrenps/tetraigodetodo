window.objXml

$(document).ready(function () {
   //getWebservicesParameters();

});

/* load xml file*/
function getWebservicesParameters () {
    // XML file
    var url = "js/productos.xml";
    window.objXml;

    // AJAX request
    var xhr = (window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP"));
    xhr.onreadystatechange = XHRhandler;
    xhr.open("GET", url, true);
    xhr.send(null);

    // handle response
    function XHRhandler() {
        if (xhr.readyState == 4) {      
            var objXml = XML2jsobj(xhr.responseXML.documentElement);
            window.objXml = objXml;
            xhr = null;     
        }
    }     
}

$("#Acalculadora").click(function() {
	//LoadCalculadora();
})

function LoadCalculadora () {
	var selectProductos = document.getElementById("Productos");
    selectProductos.options.length = 0;

    for (var index in window.objXml.elemento) {
    	var text = window.objXml.elemento[index].key
    	var value = (window.objXml.elemento[index].value).replace("%","");
    	(selectProductos.options[selectProductos.options.length] = new Option(text, value)); 
    }
}

$("#ButtonReset").click(function() {
    ReserCalculadora();
});

$("#Calcular").click(function() {
    if (ValidarDatos() == true) {
        CalcularCotizacion();
    }
});

function ValidarDatos () {
    

    if (validateNumericField("PesoLbs", "El valor del peso es invalido") == false){
        return false;        
    }
    if (validateNumericField("PesoKgs", "El valor del peso es invalido") == false){
        return false;
    }
    if (validateNumericField("Precio", "El precio del producto es invalido") == false){
        return false;
    }

    return true;
}

function CalcularCotizacion () {
    var Lbs = $("#PesoLbs").val();
    var Kgs = $("#PesoKgs").val();
    var Precio = $("#Precio").val();

    
    $("#Calcular").hide();
    $(".Cotizacion").show();
}

function ReserCalculadora () {
    $(".Cotizacion").hide();
    $("#Calcular").show();
    $("#PesoLbs").val("");
    $("#PesoKgs").val("");
    $("#Precio").val("");
}