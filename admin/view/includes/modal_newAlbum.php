<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Grupo</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form action="<?php echo $helper->url("album","crear"); ?>" method="post">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nombre">
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Activo:</label>
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
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
			</form>
            </div>

        </div>
    </div>
</div>