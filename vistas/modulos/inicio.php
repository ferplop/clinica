<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Resumen</div>
									
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Pacientes</h6>
											<?php
											  require_once "../config/conexion1.php";
											  $sql = "SELECT COUNT(*) total FROM customers";
											  $result = $bd->query($sql); //$pdo sería el objeto conexión
											  $total = $result->fetchColumn();
											?>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Doctores</h6>
											<?php
											  require_once "../config/conexion1.php";
											  $sql = "SELECT COUNT(*) total FROM doctor";
											  $result = $bd->query($sql); //$pdo sería el objeto conexión
											  $total2 = $result->fetchColumn();
											?>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Citas</h6>
											<?php
											  require_once "../config/conexion1.php";
											  $sql = "SELECT COUNT(*) total FROM appointment";
											  $result = $bd->query($sql); //$pdo sería el objeto conexión
											  $total3 = $result->fetchColumn();
											?>
										</div>
									</div>
								</div>
							</div>
						</div>

						
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos pacientes</div>
									<?php
function connect(){
return new mysqli("localhost","root","","proyecto_final");
}
$con = connect();
$sql = "SELECT * FROM customers   ORDER BY apellidop ASC LIMIT 5";
$query  =$con->query($sql);
$data =  array();
if($query){
    while($r = $query->fetch_object()){
        $data[] = $r;
    }
}
?>
<?php if(count($data)>0):?>
	<?php foreach($data as $d):?>
									<div class="card-list">
<!-- POR ACA COMENTO O BAJO DATOS DE MYSQL PARA VISUALIZARLO CON LAS CONEXIONES--------  -->

										<div class="item-list">
											<div class="avatar">
												<img src="../../assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username"><?php echo $d->apellidop; ?></div>
												<div class="status">Pacientes</div>
											</div>
											
										</div>


									</div>
									<?php endforeach; ?>
                            <?php else:?>
                            <p class="alert alert-warning"><strong>No hay datos</strong></p>
                            <?php endif; ?> 
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos doctores</div>
									<?php

$con = connect();
$sql = "SELECT * FROM doctor   ORDER BY apedoc ASC LIMIT 5";
$query  =$con->query($sql);
$data =  array();
if($query){
    while($r = $query->fetch_object()){
        $data[] = $r;
    }
}
?>
<?php if(count($data)>0):?>
	<?php foreach($data as $d):?>
									<div class="card-list">
<!-- POR ACA COMENTO O BAJO DATOS DE MYSQL PARA VISUALIZARLO CON LAS CONEXIONES--------  -->

										<div class="item-list">
											<div class="avatar">
												<img src="../../assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username"><?php echo $d->apedoc; ?></div>
												<div class="status">Doctores</div>
											</div>
											
										</div>


									</div>
									<?php endforeach; ?>
                            <?php else:?>
                            <p class="alert alert-warning"><strong>No hay datos</strong></p>
                            <?php endif; ?> 
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos especialidades</div>
									<?php

$con = connect();
$sql = "SELECT * FROM specialty   ORDER BY nombrees ASC LIMIT 5";
$query  =$con->query($sql);
$data =  array();
if($query){
    while($r = $query->fetch_object()){
        $data[] = $r;
    }
}
?>
<?php if(count($data)>0):?>
	<?php foreach($data as $d):?>
									<div class="card-list">
<!-- POR ACA COMENTO O BAJO DATOS DE MYSQL PARA VISUALIZARLO CON LAS CONEXIONES--------  -->

										<div class="item-list">
											
											<div class="info-user ml-3">
												<div class="username"><?php echo $d->nombrees; ?></div>
												<div class="status">Especialidades</div>
											</div>
											
										</div>


									</div>
									<?php endforeach; ?>
                            <?php else:?>
                            <p class="alert alert-warning"><strong>No hay datos</strong></p>
                            <?php endif; ?> 
								</div>
							</div>
						</div>
						
					</div>
				
				</div>
			</div>
			
		</div>
        		<!-- End Custom template -->
	</div>