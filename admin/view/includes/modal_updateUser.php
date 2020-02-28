<div class="modal fade" id="edit_<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Usuario</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form action="<?php echo $helper->url("usuarios","actualizar"); ?>&id=<?php echo $user->id; ?>" method="POST">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Usuario:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nombre" value="<?php echo $user->nombre; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="apellido" value="<?php echo $user->apellido; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="email" value="<?php echo $user->email; ?>">
					</div>
				</div>

				<!--<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Empresas:</label>
					</div>
					<div class="col-sm-9">
					<select multiple class="form-control Select2Buttons" name="empresa[]">
						<?php foreach($allEmpresas as $emp) {?>
							<option value=<?php echo $emp->id; ?> 
							<?php 
							$opcion=explode(",", $user->empresa);
							foreach($opcion as $op) {
								if ($op == $emp->id) { echo "selected"; } 
							}
							//if ($user->empresa == $emp->id) { echo "selected"; } 
							?>>
							<?php echo $emp->empresa; ?></option>
						<?php }?>
					</select>
					</div>
				</div>-->

				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Nivel de acceso:</label>
					</div>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="isAdmin" value="0" <?php if ($user->administrador == 0) { echo "checked='checked'"; } ?>>Usuario</label>
						<label class="radio-inline"><input type="radio" name="isAdmin" value="1" <?php if ($user->administrador == 1) { echo "checked='checked'"; } ?>>Administrador</label>
					</div>
				</div>

				<!--<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Permisos de aplicación:</label>
					</div>
					<div class="col-sm-9">
						<label class="checkbox-inline"><input type="checkbox" name="app_crear" <?php if ($user->app_crear == 1) { echo "checked='checked'"; } ?>>Crear</label>
						<label class="checkbox-inline"><input type="checkbox" name="app_modificar" <?php if ($user->app_modificar== 1) { echo "checked='checked'"; } ?>>Modificar</label>
						<label class="checkbox-inline"><input type="checkbox" name="app_borrar" <?php if ($user->app_borrar == 1) { echo "checked='checked'"; } ?>>Borrar</label>
						<label class="checkbox-inline"><input type="checkbox" name="app_consultar" <?php if ($user->app_consultar == 1) { echo "checked='checked'"; } ?>>Consultar</label>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Permisos de pagos:</label>
					</div>
					<div class="col-sm-9">
						<label class="checkbox-inline"><input type="checkbox" name="pagar" <?php if ($user->pagar == 1) { echo "checked='checked'"; } ?>>Registrar Pagos</label>
						<label class="checkbox-inline"><input type="checkbox" name="cancelar" <?php if ($user->cancelar== 1) { echo "checked='checked'"; } ?>>Cancelar Pagos</label>
						
					</div>
				</div>-->

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