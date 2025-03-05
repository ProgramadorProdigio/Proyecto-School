function loadFormPeriodo(id) {

    clearArea('frmArea');
    let url = "";
    if (id === "none") {
        url = "period/frmPeriod.php";
    } else if (id === "mod") {
        url = "period/modPeriodo.php";
    }

    let datos = {
        id: id
    };

    $.post(url, JSON.stringify(datos), function (responseText, status) {
        try {
            if (status == "success") {
                document.getElementById('frmArea').innerHTML = responseText;
                // Inicializar datepickers después de cargar el formulario
                $('.datepicker').datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose: true,
                    language: 'es'
                });
            } else {
                throw status;
            }
        } catch (e) {
            // Usar la nueva función de modal de error
            mostrarErrorCaptura('Error al cargar el formulario: ' + e);
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        mostrarErrorCaptura('Error de conexión: ' + textStatus + ' - ' + errorThrown);
    });

}