
<!DOCTYPE html>
<html lang="en">
<head>
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
					<h1><span>TPM HIDALGO</span></h1>
					<div class="bor"></div>
					<p></p>
				</div>
			</div>
		</div>
	</div>
	<?php
		$p_anterior = "";
		$p_mes = "";
		$p_ameses = "";
		$p_anual = "";

			if(is_array($array)){
				foreach ($array as $value) {
					$p_anterior = $value[1];
					$p_mes = $value[2];
					$p_ameses = $value[3];
					$p_anual = $value[4];
				}
			}
	?>
	<!-- Slider -->
	<div class="content">
		<div class="container-fluid">
			<div class="tp-banner-container">
				<div class="tp-banner">
					<ul>

						<!-- ITEM -->
						<li data-transition="flyin" data-slotamount="4" data-masterspeed="300">
							<img src="view/img/slider/slide1.png"  alt=""  data-bgposition="left top" data-duration="2000" data-bgfit="200" data-bgfitend="100"  />
							<!-- Layer 1.1-->
							<div class="tp-caption modern_big_redbg skewfromleftshort customout
								data-x="90"
								data-y="80"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="1000"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 1">Producción 2020
							</div>
							<div class="tp-caption very_large_text customin customout heading"
									data-x="200"
									data-y="40"
									data-splitin="chars"
									data-elementdelay="0.05"
									data-start="1200"
									data-speed="1500"
									data-easing="Back.easeOut"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-splitout="lines"
									data-endelementdelay="0.1"
									data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
									data-endspeed="500"
									data-endeasing="Back.easeIn"
									data-captionhidden="on"
									style="z-index: 1">Día Anterior: <?php echo $p_anterior;  ?>
								</div>
								<div class="tp-caption very_large_text customin customout heading"
									data-x="200"
									data-y="120"
									data-splitin="chars"
									data-elementdelay="0.05"
									data-start="1200"
									data-speed="1500"
									data-easing="Back.easeOut"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-splitout="lines"
									data-endelementdelay="0.1"
									data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
									data-endspeed="500"
									data-endeasing="Back.easeIn"
									data-captionhidden="on"
									style="z-index: 1">Promedio día mes: <?php echo $p_mes;  ?>
								</div>
								<div class="tp-caption very_large_text customin customout heading"
									data-x="200"
									data-y="208"
									data-splitin="chars"
									data-elementdelay="0.05"
									data-start="1200"
									data-speed="1500"
									data-easing="Back.easeOut"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-splitout="lines"
									data-endelementdelay="0.1"
									data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
									data-endspeed="500"
									data-endeasing="Back.easeIn"
									data-captionhidden="on"
									style="z-index: 1">Acumulada mes: <?php echo $p_ameses;  ?>
								</div>
								<div class="tp-caption very_large_text customin customout heading"
									data-x="200"
									data-y="308"
									data-splitin="chars"
									data-elementdelay="0.05"
									data-start="1200"
									data-speed="1500"
									data-easing="Back.easeOut"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-splitout="lines"
									data-endelementdelay="0.1"
									data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
									data-endspeed="500"
									data-endeasing="Back.easeIn"
									data-captionhidden="on"
									style="z-index: 1">Acumulada año: <?php echo $p_anual;  ?>
								</div>
						</li>

						<li data-transition="cube" data-slotamount="6" data-masterspeed="300">
							<img src="view/img/slider/p1.png"  alt=""  data-bgposition="left center" data-duration="2000" data-bgfit="200" data-bgfitend="100" />
							<div class="tp-caption modern_big_redbg skewfromleftshort customout
								data-x="90"
								data-y="80"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="1000"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 1">OEE
							</div>
						</li>

						<li data-transition="cube" data-slotamount="6" data-masterspeed="300">
							<img src="view/img/slider/p2.png"  alt=""  data-bgposition="left center" data-duration="2000" data-bgfit="200" data-bgfitend="100" />
							<div class="tp-caption modern_big_redbg skewfromleftshort customout
								data-x="90"
								data-y="80"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="1000"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 1">OEE
							</div>
						</li>

						<li data-transition="cube" data-slotamount="6" data-masterspeed="300">
							<img src="view/img/slider/p3.png"  alt=""  data-bgposition="left center" data-duration="2000" data-bgfit="200" data-bgfitend="100" />
							<div class="tp-caption modern_big_redbg skewfromleftshort customout
								data-x="90"
								data-y="80"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="1000"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 1">OEE
							</div>
						</li>

						<li data-transition="cube" data-slotamount="6" data-masterspeed="300">
							<img src="view/img/slider/p4.png"  alt=""  data-bgposition="left center" data-duration="2000" data-bgfit="200" data-bgfitend="100" />
							<div class="tp-caption modern_big_redbg skewfromleftshort customout
								data-x="90"
								data-y="80"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="1000"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 1">OEE
							</div>
						</li>

						<li data-transition="cube" data-slotamount="6" data-masterspeed="300">
							<img src="view/img/slider/p5.png"  alt=""  data-bgposition="left center" data-duration="2000" data-bgfit="200" data-bgfitend="100" />
							<div class="tp-caption modern_big_redbg skewfromleftshort customout
								data-x="90"
								data-y="80"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="800"
								data-start="1000"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 1">OEE
							</div>
						</li>

					</ul>
				</div>
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


	<script>
			// Revolution Slider
			var revapi;
			jQuery(document).ready(function() {
				   revapi = jQuery('.tp-banner').revolution(
					{
						delay: 9000,
						startwidth: 1200,
						startheight: 750,
						hideThumbs: 200,
						shadow: 3,
						navigationType: "none",
						hideThumbsOnMobile: "on",
						hideArrowsOnMobile: "on",
						hideThumbsUnderResoluition: 0,
						touchenabled: "on",
						fullWidth: "on"
					});
			});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
  			setTimeout(function(){
			location.href = "index.php?controller=Covid";
			}, 60000);
		});
	</script>

</body>
</html>
