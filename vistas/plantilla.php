<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>CLINICAS</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="vistas/assets/img/logo.png" type="image/x-icon"/>
	<!-- Fonts and icons -->
	<script src="vistas/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['vistas/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="vistas/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="vistas/assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="vistas/assets/css/demo.css">
	<!-- SweetAlert 2 -->
	<<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	<!--   Core JS Files   -->
	<script src="vistas/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="vistas/assets/js/usuarios.js"></script>
	<script src="vistas/assets/js/core/popper.min.js"></script>
	<script src="vistas/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="vistas/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="vistas/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="vistas/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Chart JS -->
	<script src="vistas/assets/js/plugin/chart.js/chart.min.js"></script>
	<!-- jQuery Sparkline -->
	<script src="vistas/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
	<!-- Chart Circle -->
	<script src="vistas/assets/js/plugin/chart-circle/circles.min.js"></script>
	<!-- Datatables -->
	<script src="vistas/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Bootstrap Notify -->
	<!-- jQuery Vector Maps -->
	<script src="vistas/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="vistas/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
	<!-- Sweet Alert -->
	<script src="vistas/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<!-- Atlantis JS -->
	<script src="vistas/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="vistas/assets/js/setting-demo.js"></script>
	<script src="vistas/assets/js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: <?php echo  $total; ?>,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})
		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: <?php echo  $total2; ?>,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})
		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: <?php echo  $total3; ?>,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})
		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');
		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false 
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});
		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	<script src="vistas/assets/js/jquery.js"></script>
</head>
<body>
	<?php
	if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
		echo '<div class="wrapper">';
		include "modulos/cabecera.php";
		include "modulos/menu.php";
		if(isset($_GET["ruta"])){
			if($_GET["ruta"] == "inicio" ||
			$_GET["ruta"] == "servidores" ||
			$_GET["ruta"] == "usuarios" ||
			$_GET["ruta"] == "salir"){
				include "modulos/".$_GET["ruta"].".php";
			}else{
				include "modulos/404.php";
			}

		}else{
			include "modulos/inicio.php";
		}
	}else{
		include "modulos/login.php";
	}
	?>
</body>
</html>