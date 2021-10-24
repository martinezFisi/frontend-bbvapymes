
function enviarsms(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "componentes/enviarsms.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                alertify.success("Envío SMS con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}



function enviarmail(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "componentes/enviacorreofirmado.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                alertify.success("Envío correo con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}

function validarsms(id) {

$pin = $("#numberpin").val();

    cadena = "id=" + $pin;

    $.ajax({
        type: "POST",
        url: "componentes/validarsms.php",
        data: $pin,
        success: function (r) {
            if (r == 1) {
                alertify.success("Validación conforme!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
