<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Usuario:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
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
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="apellido">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="email">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Contraseña:</label>
					</div>
					<div class="col-sm-9">
                        <input type="password" name="password" class="form-control"/>
					</div>
				</div>

				<!--<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Empresas:</label>
					</div>
					<div class="col-sm-9">
					<select multiple class="form-control Select2Buttons" name="empresa[]">
						<?php foreach($allEmpresas as $emp) {?>
							<option value=<?php echo $emp->id; ?>><?php echo $emp->empresa; ?></option>
						<?php }?>
					</select>
					</div>
				</div>-->

				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Nivel de acceso:</label>
					</div>
					<div class="col-sm-8">
						<label class="radio-inline"><input type="radio" name="isAdmin" value="0" checked='checked'>Usuario</label>
						<label class="radio-inline"><input type="radio" name="isAdmin" value="1">Administrador</label>
					</div>
				</div>

				<!--<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Permisos de apliación:</label>
					</div>
					<div class="col-sm-8">
						<label class="checkbox-inline">
							<input type="checkbox" name="app_crear">Crear</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="app_modificar">Modificar</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="app_borrar">Borrar</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="app_consultar" checked=checked>Consultar</label>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Permisos de pagos:</label>
					</div>
					<div class="col-sm-9">
						<label class="checkbox-inline"><input type="checkbox" name="pagar" checked='checked'>Registrar Pagos</label>
						<label class="checkbox-inline"><input type="checkbox" name="cancelar">Cancelar Pagos</label>
						
					</div>
				</div>-->

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