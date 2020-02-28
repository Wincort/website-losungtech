<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar imagen</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form id="Imagen_0" action="<?php echo $helper->url("Imagenes","crear"); ?>" method="post">
                <input type="hidden" name="id_album" value="<?php echo $id_album; ?>">
				<div class="col-sm-6">
				    <div class="row form-group">
    					<div class="col-sm-3">
    						<label class="control-label" style="position:relative; top:7px;">Título:</label>
    					</div>
    					<div class="col-sm-9">
    						<input type="text" class="form-control" name="titulo">
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-sm-3">
    						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
    					</div>
    					<div class="col-sm-9">
    						<input id="img_0_hidden" type="hidden" name="imagen-hidden">
    						<input id="img_0" type="file" class="form-control" name="imagen">
    					</div>
                        <div class="col-sm-3"></div>
    					
    				</div>
    				<div class="row form-group">
    					<div class="col-sm-3">
    						<label class="control-label" style="position:relative; top:7px;">Información:</label>
    					</div>
    					<div class="col-sm-9">
                            <input type="text" class="form-control" name="contenido">
    					</div>
    				</div>
                    <div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Publicar:</label>
					</div>
					<div class="col-sm-8">
						<label class="radio-inline"><input type="radio" name="publicar" value="1" checked='checked'>Sí</label>
						<label class="radio-inline"><input type="radio" name="publicar" value="0">No</label>
					</div>
				</div>
				</div>
                <div class="col-sm-6">
                    <div id="preview-thumbnail-img_0" class="col-sm-12 preview-thumbnail">
    						<a id="delete_img_0" href="#!" onclick="remover_imagen(this.id);">
    							<button class="close-thumbnail centered" type="button">×</button>
    							<img id="preview_img_0" width="100%" onerror="this.src='images/sin-imagen.png';" class="img-thumbnail" src=""/>
    						</a>
    					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="button" name="editar" class="btn btn-success" onclick="CargarImg('0');"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>