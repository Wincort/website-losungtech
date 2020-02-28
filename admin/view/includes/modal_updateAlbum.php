<div class="modal fade" id="edit_<?php echo $album->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Grupo</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form action="<?php echo $helper->url("album","actualizar"); ?>&id=<?php echo $album->id; ?>" method="POST">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nombre" value="<?php echo $album->nombre; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Activo:</label>
					</div>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="publicar" value="1" <?php if ($album->publicar == 1) { echo "checked='checked'"; } ?>>Sí</label>
						<label class="radio-inline"><input type="radio" name="publicar" value="0" <?php if ($album->publicar  == 0) { echo "checked='checked'"; } ?>>No</label>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>