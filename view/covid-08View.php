<!DOCTYPE html>
<html lang="en">
<head>
<!--#-->
	<meta charset="UTF-8">
	<!-- Descripcion, Palabras Claves y Autor -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap.min.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-plugins/dataTables.bootstrap.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-responsive/dataTables.responsive.css">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css"  href="view/css/settings.css" />
	<!-- Pretty Photo -->
	<link href="view/css/prettyPhoto.css" rel="stylesheet">
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="view/fontawesome-free/css/all.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/style.css">
	<!-- Grupak-Blue -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/grupak-blue.css">
	<!--Favicon Grupak-->
	<link rel="shortcut icon" href="view/img/favicon/grupak-favicon.ico">
	<title>Incapacidades</title>
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
						<div class="address">
							<i class="fas fa-sign-in-alt"></i>
							<a href="index.php?controller=Login&action=login">
								Iniciar Session
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>
	<!-- .\ End -->

	<!-- Pagina en blanco -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="hero">
					<h1><span>Incapacidades </span></h1>
					<div class="bor"></div>
					<p></p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Slider -->
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <video height="500" autoplay controls>
                    <!--1. Lavado de manos_Final-->
                    <source src="view/videos/08.mp4" type="video/mp4">
                </video>
            </div>
		</div>
	</div>

	<div class="bor"></div>


	<!-- jQuery -->
	<script type="text/javascript" src="view/js/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>

	<!-- SLIDER REVOLUTION 4.x SCRIPTS -->
	<script src="view/js/jquery.themepunch.plugins.min.js"></script>
	<script src="view/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Respond JS for IE8 -->
	<script src="view/js/respond.min.js"></script>
	<!-- HTML5 Support for IE -->
	<script src="view/js/html5shiv.js"></script>

    <script type="text/javascript">
		$(document).ready(function(){
  			setTimeout(function(){
			location.href = "index.php?controller=Covid&action=video_nueve";
			}, 60000);
		});
	</script>

	
</body>
</html>