<div class="modal fade" id="modalEditarUsuario"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">Editar Usuario</span> 
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"> 
				<form  method="POST">			
				    <input class="form-control" name="id" type="hidden" value="">
					    <div class="row">
						<div class="col-md-6 pr-0">
							    <div class="form-group form-group-default">
								    <label>Usuario</label>
								    <input id="editarUsuario" name="editarUsuario" value="" type="text" class="form-control" required placeholder="Ingrese Usuario" readonly>
							    </div>
						    </div>
						    <div class="col-md-6 pr-0">
							    <div class="form-group form-group-default">
								    <label>Nombre</label>
								    <input id="editarNombre" name="editarNombre" value="" type="text" class="form-control" required placeholder="Ingrese nombre">
							    </div>
						    </div>
						    <div class="col-md-6">
							    <div class="form-group form-group-default">
								    <label>Password</label>
								    <input type="password" id="editarPassword" name="editarPassword" value="" class="form-control" placeholder="Ingrese Password">
									<input type="hidden" id="passwordActual" name="passwordActual">
							    </div>
						    </div>
							<div class="col-md-6 pr-0">
							    <div class="form-group form-group-default">
								    <label>Email</label>
								    <input id="editarEmail" name="editarEmail" value="" type="text" class="form-control" required placeholder="Ingrese Email">
							    </div>
						    </div>
						    <div class="col-md-6">
							    <div class="form-group form-group-default">
								    <label>Cargo</label>
								    <select class="form-control" name="editarCargo">
										<option value="" id="editarCargo"></option>
										<option value="Administrador">Administrador</option>
			                        </select>
						    	</div>
						    </div>
						    <div class="form-group">              
              					<div class="form-group form-group-default">SUBIR FOTO</div>
              						<input type="file" class="nuevaFoto" name="editarFoto">
              						<p class="help-block">Peso máximo de la foto 2MB</p>
              						<img src="vistas/assets/img/mujer.png" class="img-thumbnail previsualizarEditar" width="100px">
              						<input type="hidden" name="fotoActual" id="fotoActual">

            
					    	</div>
						</div>
				        <div class="modal-footer no-bd">
					        <button type="submit" name="editar" class="btn btn-primary">Editar</button>
				            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				        </div>
						<?php
							$editarUsuario = new ControladorUsuarios();
                            $editarUsuario -> ctrEditarUsuario();
						?>
			    </form>
		    </div>
	    </div>
</div>