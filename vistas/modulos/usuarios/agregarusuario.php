<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			    <div class="container-fluid">
                    <div class="card-body">
	                    <form method="POST" autocomplete="off" enctype="multipart/form-data" >
					        <div class="row">
						        <div class="col-md-6 pr-0">
							        <div class="form-group form-group-default">
								        <label>Nombre</label>
								        <input name="nuevoNombre" type="text" class="form-control" required placeholder="Ingrese nombre">
							        </div>
						        </div>
						        <div class="col-md-6">
							        <div class="form-group form-group-default">
							        	<label>Usuario</label>
								        <input name="nuevoUsuario" type="text" class="form-control" required placeholder="Ingrese usuario">
							        </div>
					        	</div>
						        <div class="col-md-6">
							        <div class="form-group form-group-default">
							        	<label>Cargo</label>
								        <select class="form-control" name="nuevoCargo">
				                            <option value="1">Administrador</option>
			                            </select>
						        	</div>
					        	</div>
						        <div class="col-md-6">
							        <div class="form-group form-group-default">
								        <label>Correo</label>
								        <input name="nuevoEmail" type="text" class="form-control" required placeholder="Ingrese correo">
							        </div>
						        </div>
						        <div class="col-md-6">
							        <div class="form-group form-group-default">
								        <label>Password</label>
								        <input name="nuevoPassword" type="password" class="form-control" required placeholder="Ingrese contraseña">
							        </div>
						        </div>
								<div class="form-group form-group-default">
              						<div class="panel">SUBIR FOTO</div>
              						<input type="file" class="nuevaFoto" name="nuevaFoto">
									<p class="help-block">Peso máximo de la foto 2MB</p>
              						<img src="vistas/assets/img/mujer.png" alt="..." width="50">
            					</div>
						    </div>
		                        <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                    <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
                                </div>
                            </div>
							<?php
         						$crearUsuario = new ControladorUsuarios();
          						$crearUsuario -> ctrCrearUsuario();
       	 					?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- -->