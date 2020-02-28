let ValidarFormularioMensaje = (idForm) => {
    $(`#enviarcorreo_${idForm}`).button('loading');
    let campos_faltantes = 0;
    $(`.${idForm} .requerido`).each(function() {
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
        console.log(statusObject);
        MostrarNotifiacion(statusObject);
        $(`#enviarcorreo_${idForm}`).button('reset');
        return false;
    }
    PrepararMensaje(idForm);
}

let PrepararMensaje = (idFormulario) => {
    dataForm = new FormData(document.getElementById(idFormulario));

    ReenviarMensaje(dataForm)
        .then(data => {
            MostrarNotifiacion(data);
            if (data.status) {
                $(`#${idFormulario}`).each(function() { this.reset(); });
            }
            $(`#enviarcorreo_${idFormulario}`).button('reset');
        })
        .catch(err => console.error(err));
}

let ReenviarMensaje = async(parametros) => {
    let response = await fetch(`../correos/correo.aviso-reenviar.php?${parametros}`, {
        method: "POST",
        body: parametros
    });
    let data = await response.json();
    return data;
}