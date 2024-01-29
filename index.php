<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Manuel Acuña Kairath - Abogados</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700%7CJunge' rel='stylesheet' type='text/css'>
		<link href="inc/bootstrap.css" rel="stylesheet">
		<link href="inc/bootstrap.min.css" rel="stylesheet">
		<link href="inc/theme.css" rel="stylesheet" type="text/css">
		<link href="inc/index.css" rel="stylesheet" type="text/css" media="screen">
		<link href="inc/css.txt" rel="stylesheet" type="text/css">
		<link href="inc/animate.css" rel="stylesheet" type="text/css" media="screen, projection">
		<link href="inc/portfolio.css" rel="stylesheet" type="text/css" media="screen">
		<link href="inc/contact.css" type="text/css" rel="stylesheet" media="screen">
		<!-- Carrousel -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">

		<!-- Fontawesome -->
		<script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js" defer crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.13.1/js/v4-shims.js" defer crossorigin="anonymous"></script>

        <script type="text/javascript" src="inc/source.js"></script>
	</head>		
	<body style="zoom: 1; background-color:#4C0D06!important">
		<?php if (isset($_SESSION['status']) && !empty($_SESSION['status'])) { ?>
			<div class="row">
				<div class="span12">
					<div class="alert-formulario">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong><?php echo $_SESSION['status'];?></strong>
					</div>
				</div>
			</div>
		<?php
			unset($_SESSION['status']);
			} ?>
		
		<br><br>	
		<div class="my-3 align-items-center text-center">
			<img class="text-center" width="400px" height="" src="img/logo-mak-claro.png">
			<!--<h1 style="color: #B79E9C; text-align: center;">Manuel Acuña Kairath</h1>
			<h3 style="color: #B79E9C;text-align: center;">Abogados</h3>-->
		</div>
		<div class="my-3 align-items-center text-center">
			
			<a class="start link-inicial me-4" href="es/index.php" style="font-size:18pt">Español</a> 
			<a class="link-inicial ms-3" href="en/index.php" style="font-size:18pt">English</a></h4>
			<!--<a href="es/index.php.html" class="" data-drupal-link-system-path="&lt;front&gt;"><button type="button" class="btn btn-call-2 ">Español</button></a>
			<a href="en/index.php.html" class="" data-drupal-link-system-path="&lt;front&gt;"><button type="button" class="btn btn-call-2 ">English</button></a>-->
		</div>
		<!-- Portada -->
		
		<div class="portada">
			<img width="100%" height="25%" src="img/portada-inicial.png">
		</div>

		<!-- Scripts -->
		<script src="inc/jquery-latest.js"></script>
		<script src="inc/bootstrap.min.js"></script>
		<!-- <script src="inc/theme.js"></script> -->
		<script type="text/javascript" src="inc/index-slider.js"></script>
	</body>
</html>