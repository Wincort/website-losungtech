<div class="modal fade" id="edit_<?php echo $Imagen->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar imagen</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form id="Imagen_<?php echo $Imagen->id;?>" action="<?php echo $helper->url("Imagenes","actualizar"); ?>&id=<?php echo $Imagen->id; ?>" method="POST">
				<input type="hidden" name="id_album" value="<?php echo $Imagen->idAlbum; ?>">
				<div class="col-sm-6">
				    <div class="row form-group">
    					<div class="col-sm-3">
    						<label class="control-label" style="position:relative; top:7px;">Título:</label>
    					</div>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="titulo" value="<?php echo $Imagen->titulo; ?>">
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-sm-3">
    						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
    					</div>
    					<div class="col-sm-9">
    						<input id="img_<?php echo $Imagen->id;?>_hidden" type="hidden" name="imagen-hidden" value="<?php echo $Imagen->imagen; ?>">
    						<input id="img_<?php echo $Imagen->id;?>" type="file" class="form-control" name="imagen">
    					</div>
                        <div class="col-sm-3"></div>
    					
    				</div>
    				<div class="row form-group">
    					<div class="col-sm-3">
    						<label class="control-label" style="position:relative; top:7px;">Información:</label>
    					</div>
    					<div class="col-sm-9">
                            <input type="text" class="form-control" name="contenido" value="<?php echo $Imagen->contenido; ?>">
    					</div>
    				</div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="control-label">Publicar:</label>
                        </div>
                        <div class="col-sm-9">
                            <label class="radio-inline"><input type="radio" name="publicar" value="1" <?php if ($Imagen->publicar == 1) { echo "checked='checked'"; } ?>>Sí</label>
                            <label class="radio-inline"><input type="radio" name="publicar" value="0" <?php if ($Imagen->publicar  == 0) { echo "checked='checked'"; } ?>>No</label>
                        </div>
				    </div>
				</div>
                <div class="col-sm-6">
                    <div id="preview-thumbnail-img_<?php echo $Imagen->id;?>" class="col-sm-12 preview-thumbnail">
    						<a id="delete_img_<?php echo $Imagen->id;?>" href="#!" onclick="remover_imagen(this.id);">
    							<button class="close-thumbnail centered" type="button">×</button>
    							<img id="preview_img_<?php echo $Imagen->id;?>" width="100%" onerror="this.src='images/sin-imagen.png';" class="img-thumbnail post-carga" data-src="<?php if ($Imagen->imagen!=''){echo 'assets/img/'.$Imagen->imagen;}?>"/>
    						</a>
    					</div>
                </div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="button" name="editar" class="btn btn-success" onclick="CargarImg('<?php echo $Imagen->id;?>');"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>