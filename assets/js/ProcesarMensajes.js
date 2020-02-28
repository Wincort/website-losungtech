let ValidarFormulario = () => {
    $('#enviarcorreo').button('loading');
    let campos_faltantes = 0;
    $('.requerido').each(function() {
        if ($(this).val() == 0 || $(this).val() == '' || $(this).val() == null) {
            $(this).css({ 'border': '0.5rem solid #F00' });
            $(this).focus();
            setTimeout(() => { $(this).focus(); }, 100);
            campos_faltantes++;
            return false;
        } else {
            $(this).css({ 'border': '0.1rem solid #B5D6A9' });
            campos_faltantes = 0;
        }
    });

    if (campos_faltantes > 0) {
        let statusObject = {
            status: false,
            titulo: "¡Falta campo requerido!",
            mensaje: "Por favor añada información al campo requerido"
        };
        MostrarNotifiacion(statusObject);
        $('#enviarcorreo').button('reset');
        return false;
    }
    PrepararMensaje();
}

let PrepararMensaje = () => {
    dataForm = new FormData(document.getElementById('formulario'));

    GuardarCopia(dataForm)
        .then(data => {
            //MostrarNotifiacion(data);
            return EnviarMensaje(dataForm)
        })
        .then(data => {
            MostrarNotifiacion(data.result1);
            //MostrarNotifiacion(data.result2);
            if (data.result1.status && data.result2.status) {
                $('#formulario').each(function() { this.reset(); });
            }
            $('#enviarcorreo').button('reset');
        })
        .catch(err => console.error(err));
}

let EnviarMensaje = async(parametros) => {

    let response1 = await fetch(`correos/correo.aviso.php?${parametros}`, {
        method: "POST",
        body: parametros
    });
    let response2 = await fetch(`correos/correo.respuesta.php?${parametros}`, {
        method: "POST",
        body: parametros
    });
    let data1 = await response1.json();
    let data2 = await response2.json();
    return {
        result1: data1,
        result2: data2
    }
}

let GuardarCopia = async(param) => {
    let response = await fetch(`index.php?controller=Inicio&action=GuardarMensaje&${param}`, {
        method: "POST",
        body: param
    });
    let data = await response.json();
    return data;
}