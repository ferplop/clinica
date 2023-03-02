<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Usuarios</h4>
				<ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="inicio">
                        <i class="flaticon-home"></i>
                        </a>
                    </li>
			        <li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>		
					<li class="nav-item">
						<a href="#"></a>
					</li>
				</ul>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Lista de Usuarios</h4>
                                <a href="#modalAgregarUsuario" class="btn btn-primary btn-round ml-auto" data-toggle="modal">Nuevo</a>
                                <?php include('usuarios/agregarusuario.php'); ?>
                            </div>
                            <div class="card-tools">		
                            </div>
                            <div class="card-body">								
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                        <th style="width:10px">#</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Foto</th>
                                        <th>email</th>
                                        <th>Cargo</th>
                                        <th>Estado</th>
                                        <th>Último login</th>
                                        <th>Acciones</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php

                                        $item = null;
                                        $valor = null;

                                        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                                    foreach ($usuarios as $key => $value){
                                        
                                        echo ' <tr>
                                                <td>'.($key+1).'</td>
                                                <td>'.$value["nombre"].'</td>
                                                <td>'.$value["usuario"].'</td>;';
                                                if ($value["foto"] != ""){
                                                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
                                                    }else{
                                                    echo '<td><img src="vistas/assets/img/mujer.png" class="img-thumbnail" width="40px"></td>';
                                                  }
                                        echo'   <td>'.$value["email"].'</td>;
                                                <td>'.$value["cargo"].'</td>';
                                                if($value["estado"] != 0){

                                                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                                                }else{

                                                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
                                                }             
                                                echo '<td>'.$value["ultimo_login"].'</td>
                                                <td>
                                                    <div class="btn-group">
                                                    <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>
                                                    </div>  
                                                </td>
                                                </tr>';
                                        }
                                        ?> 
                                    </tbody>
                                    <?php include "usuarios/modificarusuario.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

