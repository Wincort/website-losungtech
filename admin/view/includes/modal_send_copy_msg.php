<div class="modal fade" id="send_copy_msg_<?php echo $mensaje->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Enviar copia del mensaje</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid formulario_<?php echo $mensaje->id; ?>">
                    <form id='formulario_<?php echo $mensaje->id; ?>' method='post' action='' target='_self' onsubmit="return false;" enctype="multipart/form-data" autocomplete="off">      
                        <input name="nombre" type="hidden" value="<?php echo $mensaje->nombre; ?>">
                        <input name="apellido" type="hidden" value="<?php echo $mensaje->apellido; ?>">
                        <input name="correo" type="hidden" value="<?php echo $mensaje->email; ?>">
                        <input name="telefono" type="hidden" value="<?php echo $mensaje->telefono; ?>">
                        <textarea name="mensaje" class="form-control" rows="10" style="display:none"><?php echo $mensaje->mensaje; ?></textarea>

                        <input id="correo_destino_<?php echo $mensaje->id; ?>" name="correo_destino" type="text" class="form-correo requerido form-control" onblur="validaMail(this.value, this.id,'formulario_<?php echo $mensaje->id; ?>');return false;" placeholder="EMAIL">

                        <button type="submit" id="enviarcorreo_formulario_<?php echo $mensaje->id; ?>" onclick="ValidarFormularioMensaje('formulario_<?php echo $mensaje->id; ?>');return false;" class="btn btn-success enviarcorreo" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando">ENVIAR</button>
                    </form>
                </div>
             </div>   
        </div>
    </div>
</div>
