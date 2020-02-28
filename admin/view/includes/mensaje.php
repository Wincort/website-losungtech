<div style="display:none;">
    <div id="msg<?php echo $mensaje->id; ?>" class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <label class="control-label" style="">Fecha:</label>
            </div>
            <div class="col-sm-9">
                <p><?php $date=strtotime($mensaje->fecha); echo date("d/m/Y g:i a",$date); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label class="control-label" style="">Nombre:</label>
            </div>
            <div class="col-sm-9">
                <p><?php echo $mensaje->nombre; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label class="control-label" style="">Apellido:</label>
            </div>
            <div class="col-sm-9">
                <p><?php echo $mensaje->apellido; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label class="control-label" style="">Teléfono:</label>
            </div>
            <div class="col-sm-9">
                <p><?php echo $mensaje->telefono; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label class="control-label" style="">Correo:</label>
            </div>
            <div class="col-sm-9">
                <p><?php echo $mensaje->email; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label class="control-label" style="">Mensaje:</label>
            </div>
            <div class="col-sm-9">
                <p><?php echo $mensaje->mensaje; ?></p>
            </div>
        </div>
        <a href="#send_copy_msg_<?php echo $mensaje->id; ?>" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-envelope"></span> Enviar correo</a>
    </div>
</div>