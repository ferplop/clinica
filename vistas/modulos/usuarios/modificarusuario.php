<div class="modal fade" id="modalEditarUsuario"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">Editar</span> 
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
								    <input name="editarUsuario" value="" type="text" class="form-control" readonly>
							    </div>
						    </div>
						    <div class="col-md-6 pr-0">
							    <div class="form-group form-group-default">
								    <label>Nombre</label>
								    <input name="editarNombre" value="" type="text" class="form-control" required placeholder="Ingrese nombre">
							    </div>
						    </div>
						    <div class="col-md-6">
							    <div class="form-group form-group-default">
								    <label>Password</label>
								    <input name="editarPassword" value="" type="password" class="form-control" required placeholder="Ingrese Password">
							    </div>
						    </div>
							<div class="col-md-6 pr-0">
							    <div class="form-group form-group-default">
								    <label>Email</label>
								    <input name="editarEmail" value="" type="text" class="form-control" required placeholder="Ingrese Email">
							    </div>
						    </div>
						    <div class="col-md-6">
							    <div class="form-group form-group-default">
								    <label>Cargo</label>
								    <select class="form-control" name="editarCargo">
				                        <option value="1">Administrador</option>
			                        </select>
						    	</div>
						    </div>
						    <div class="form-group">              
              					<div class="form-group form-group-default">SUBIR FOTO</div>
              						<input type="file" class="nuevaFoto" name="editarFoto">
              						<p class="help-block">Peso m??ximo de la foto 2MB</p>
              						<img src="vistas/assets/img/mujer.png" class="img-thumbnail previsualizarEditar" width="100px">
              						<input type="hidden" name="fotoActual" id="fotoActual">

            
					    	</div>
						</div>
				        <div class="modal-footer no-bd">
					        <button type="submit" name="editar" class="btn btn-primary">Editar</button>
				            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				        </div>
			    </form>
		    </div>
	    </div>
</div>
									
									
<!-- Delete -->
<div class="modal fade" id="deleteRowModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">??Esta seguro de borrar el registro?</p>
				<h2 class="text-center"><?php echo $row['nombre']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../view/usuarios/BorrarRegistro.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
            </div>

        </div>
    </div>
</div>	
									
			<!-- Password-->	
<div class="modal fade" id="PassRowModal<?php echo $row['id']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
					Password</span> 
					
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		
				 
				<form  method="POST" action="../view/usuarios/password.php?id=<?php echo $row['id']; ?>">
							
				<input class="form-control" name="id" type="hidden" value="<?php echo $row->id; ?>">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>New Password</label>
						
						<input type="password" class="form-control" name="clave">
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="modal-footer no-bd">
					<button type="submit" name="editar" class="btn btn-primary">Edit
				
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>