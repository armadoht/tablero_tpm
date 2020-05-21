<?php
//Zonz de tiempo America/Mexico_City
date_default_timezone_set('America/Mexico_City');
$today = time();
$date = date('Y-m-d (H:i:s)', time());

if(!isset($_SESSION['user'])){
	session_destroy();
	header('Location:index.php');
}else{

	if(!isset($_SESSION['tiempo'])){
		$_SESSION['tiempo'] = $today;
	}else{
		//Si paso mas de 30 minutos rompe las variables de session.
		if($today - $_SESSION['tiempo'] > 1800){
			session_destroy();
			header('Location:index.php');
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Descripcion, Palabras Claves y Autor -->
	<meta name="description" content="Inventarios de Equipo de Computo">
	<meta name="keywords" content="Inventarios Grupak">
	<meta name="author" content="Armando Huerta Tolentino">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap.min.css">
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="view/fontawesome-free/css/all.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/style.css">
	<!-- Grupak-Blue -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/grupak-blue.css">
	<!--Favicon Grupak-->
	<link rel="shortcut icon" href="view/img/favicon/grupak-favicon.ico">

	<title>TPM || Mantenimiento Productivo Total</title>
</head>
<body>
	<!-- My Header Start-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Logo Grupak -->
					<a href=""><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
				</div>

				<div class="col-md-4 offset-md-4">
					<div class="list">
						<!--Telefono-->
						<div class="phone">
							<i class="fa fa-phone"></i>Telefono:55 4124- ext.7310
						</div>
						<hr/>
						<!--Email-->
						<div class="email">
							<i class="fa fa-envelope-o"></i>Email: ahuerta@grupak.com.mx
						</div>
						<hr/>
						<!--Direccion-->
						<div class="address">
							<i class="fa fa-home"></i>Carretera Federal Pachuca – Ciudad Sahagun , Tramo Ciudad Sahagun – Emiliano Zapata KM 20 , Municipio Emiliano Zapata, Hidalgo, C.P. 43960
						</div>

						<!--Cerrar Sessión-->
						<div class="address">
							<a href="index.php?controller=Login&action=salir">
								<i class="fas fa-sign-in-alt"></i>Cerrar Session
							</a>
						</div>

					</div>
				</div>

			</div>
		</div>
	</header>
	<!-- .\ End -->
	
	<!-- Pagina en blanco -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Formulario de Registro</h3>
			</div>
		</div>
	</div>

	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="form">
						<form action="index.php?controller=Produccion&action=registrar" method="post" class="form-horizontal">
							<div class="form-row">
								<!-- Produccion Anterior -->
								<div class="form-group col-md-6">
									<label for="Tema"><strong>Producción Anterior:</strong></label>
									<input type="text" name="p_anterior" class="form-control" class="form-control">
								</div>
								<!-- Producción Promedio del Mes -->
								<div class="form-group col-md-6">
									<label for="localidad"><strong>Producción Promedio del Mes</strong></label>
									<input type="text" name="p_mes" class="form-control" class="form-control">
								</div>
								<!-- Producción Acumulada Mes -->
								<div class="form-group col-md-6">
									<label for="localidad"><strong>Producción Acumulada Mes</strong></label>
									<input type="text" name="p_ames" class="form-control" class="form-control">
								</div>
								<!-- Producción Promedio del Mes -->
								<div class="form-group col-md-6">
									<label for="localidad"><strong>Producción Acumulada del Año</strong></label>
									<input type="text" name="p_anual" class="form-control" class="form-control">
								</div>							
								
								<div class="form-group col-md-12 ">
									<button type="submit" class="btn btn-warning btn-lg btn-block">Guardar Registro</button>
								</div>
							</div>
						</form>
					</div>
			</div>
			<div class="col-md-12">
				<?php
						echo '<div class="alert alert-primary" role="alert">';
							echo "Todos los campos son obligatorios";
						echo '</div>';
				?>
			</div>
		</div>
	</div>

	<div class="bor"></div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget">
						<h4>Responsable de la plataforma</h4>
						<p></p>
						<ul>
							<li><i class="fa fa-angle-right"></i><a href="#">Gestion de la plataforma - ualonso@grupak.com.mx</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- .\ row -->

			<div class="row">
				<hr/>
				<div class="col-md-12">
					<div class="copy pull-left">
						<p> Copyright &copy; <a href="#">www.grupak.com.mx</a> | Designed by <a href="#"></a>Ing. Armando Huerta Tolentino</a></p>
					</div>
				</div>
			</div>

		</div>
	</footer>
	<!-- .\ End -->
	
	
	<!-- jQuery -->
	<script type="text/javascript" src="view/js/query/jquery-min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>