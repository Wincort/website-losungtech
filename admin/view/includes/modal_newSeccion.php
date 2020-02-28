<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Sección</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form id="Seccion_0" action="<?php echo $helper->url("Secciones","crear"); ?>" method="post">
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
					<div class="col-sm-7">
						<input id="img_0_hidden" type="hidden" name="imagen-hidden" value="">
						<input id="img_0" type="file" class="form-control" name="imagen">
					</div>
					<div class="col-sm-2">
						<img id="preview_img_0" width="100%" src="" />
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Contenido:</label>
					</div>
					<div class="col-sm-9">
						<textarea rows=15 class="form-control" name="contenido"></textarea>
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
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="button" name="editar" class="btn btn-success" onclick="CargarImg('0');"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>