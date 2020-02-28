<div class="modal fade" id="edit_<?php echo $Seccion->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Sección</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form id="Seccion_<?php echo $Seccion->id;?>" action="<?php echo $helper->url("Secciones","actualizar"); ?>&id=<?php echo $Seccion->id; ?>" method="POST">

				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Título:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="titulo" value="<?php echo $Seccion->titulo; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
					</div>
					<div class="col-sm-7">
						<input id="img_<?php echo $Seccion->id;?>_hidden" type="hidden" name="imagen-hidden" value="<?php echo $Seccion->imagen; ?>">
						<input id="img_<?php echo $Seccion->id;?>" type="file" class="form-control" name="imagen">
					</div>
					<div id="preview-thumbnail-img_<?php echo $Seccion->id;?>" class="col-sm-2 preview-thumbnail">
						<a id="delete_img_<?php echo $Seccion->id;?>" href="#!" onclick="remover_imagen(this.id);">
							<button class="close-thumbnail centered" type="button">×</button>
							<img id="preview_img_<?php echo $Seccion->id;?>" width="100%" onerror="this.src='images/sin-imagen.png';" class="img-thumbnail" src="<?php if ($Seccion->imagen!=''){echo '../admin/assets/img/'.$Seccion->imagen;}?>"/>
						</a>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Contenido:</label>
					</div>
					<div class="col-sm-9">
						<textarea rows=15 class="form-control" name="contenido"><?php echo $Seccion->contenido; ?></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Publicar:</label>
					</div>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="publicar" value="1" <?php if ($Seccion->publicar == 1) { echo "checked='checked'"; } ?>>Sí</label>
						<label class="radio-inline"><input type="radio" name="publicar" value="0" <?php if ($Seccion->publicar  == 0) { echo "checked='checked'"; } ?>>No</label>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="button" name="editar" class="btn btn-success" onclick="CargarImg('<?php echo $Seccion->id;?>');"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>