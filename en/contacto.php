<?php
	require './../inc/header.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Manuel Acuña Kairath - Abogados</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700%7CJunge' rel='stylesheet' type='text/css'>
		<link href="../inc/bootstrap.css" rel="stylesheet">
		<link href="../inc/theme.css" rel="stylesheet" type="text/css">
		<link href="../inc/index.css" rel="stylesheet" type="text/css" media="screen">
		<link href="../inc/css.txt" rel="stylesheet" type="text/css">
		<link href="../inc/animate.css" rel="stylesheet" type="text/css" media="screen, projection">
        <link href="../inc/portfolio.css" rel="stylesheet" type="text/css" media="screen">
        <link href="../inc/contact.css" type="text/css" rel="stylesheet" media="screen">

		<!-- Fontawesome -->
		<script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js" defer crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.13.1/js/v4-shims.js" defer crossorigin="anonymous"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- <script type="text/javascript" src="../inc/load_v3.js"></script> -->
		<script type="text/javascript" src="../inc/source.js"></script>
    </head>
	<body class="pull_top" style="zoom: 1;">
		<!-- Header -->						
		<header class="menu container-fluid-nav">
			<nav class="float-center" role="navigation" aria-labelledby="block-navegacionprincipal-menu" id="block-navegacionprincipal">
				<div class="navbar-expand-md" style="" role="navigation">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 16px; text-align: left;">
								<a class="brand" href="../en/index.php">
									<!-- Logo header -->
									<img class="logo-header" src="../img/logo-mak.png">
								</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

								<!-- Botón mobile o responsive -->
								<button class="navbar-toggler" type="button">
									<div class="navbar-toggler-icon" style="margin-top: 20px;">
										<i class="fas fa-bars" style="color:#B79E9C; font-size:2rem;"></i>
									</div>
								</button>	
								<!-- Redes sociales y botón Español -->
								<div class="rrss-idioma float-end" style="margin-top:14px!important;padding-bottom:;">
									<!--<a class="redes-header"href="#"><i style="padding-top: 2px;" class="fa fa-whatsapp"></i></a>
									<a class="redes-header"href="#"><i style="padding-top: 2px;" class="fa fa-linkedin-square"></i></a>-->
									<a class="" href="../es/contacto.php"><span style="padding: 0 10px; color:#B79E9C!important;" class="combobox">Es</span></a>
								</div>
							</div>
							
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
							<!-- Opciones del menú -->
							<div class="menu2 row collapse navbar-collapse float-end" id="navDesktop">
								<ul class="nav float-end opciones-menu bottom-0">
									<li class="item-menu">
										<a href="index.php" class="nav-item nav-link pruebaDrupal is-active" data-drupal-link-system-path="&lt;front&gt;">Home</a>
									</li>
									<li class="item-menu">
										<a href="equipo.php" class="nav-item nav-link pruebaDrupal" data-drupal-link-system-path="puntos-de-conexion">Team</a>
									</li>
									<li class="item-menu">
										<a href="asesoria.php" class="nav-item nav-link pruebaDrupal" data-drupal-link-system-path="node/156">Specializations</a>
									</li>
									<li class="item-menu">
										<a href="vinculos.php" class="nav-item nav-link pruebaDrupal" data-drupal-link-system-path="node/168">Links</a>
									</li>
									<li class="item-menu">
										<a href="contacto.php" class="nav-item nav-link pruebaDrupal" data-drupal-link-system-path="noticias">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</nav>
		</header>

	   <!-- Portada 
		<div class="portada">
			<img width="100%" height="100%" src="../img/portada-5.png">
		</div>-->

		<!-- Breadcrums -->
        <div class="container breads" style="margin-top:20px">
			<a class="breadcrums" href="index.php">Home</a>&nbsp;<span style="color:#B79E9C; font-size: 12pt;"><i style="" class="fa fa-chevron-right"></i></span><span class="texto-breads"> Contact</span>
		</div><br>
		
	    <div id="contact">
	        <div class="container">
	            <div class="section_header">
					<!-- Título de página -->
	                <h1>Contact</h1>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<!-- Presentación -->
							<p>
							Thank you for contacting us, we will answer your questions as soon as possible.<br><br>
							</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<!-- Datos de contacto -->
							<p><i class="fa fa-map-marker pre" style="margin-right: 0.5rem; color: #4C0D06;" aria-hidden="true"></i>Huérfanos 835, office 1703, building Opera, Santiago</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
							<!-- Correo con link de contacto-->
							<a class="link float-end" href="mailto:%20mak@mak.cl" style="font-size: 1.125rem!important;"><i class="fa fa-envelope pre" style="margin-right: 0.5rem;" aria-hidden="true"></i>mak@mak.cl</a>
						</div>
					</div>
	            </div>       
            </div>
        </div>

		<div class="greyArea" style="padding-bottom:0px!important">
			<div id="contact">
				<div class="container">
					<?php if (isset($_SESSION['status']) && !empty($_SESSION['status'])) { ?>
						<div class="row">
							<div class="text-center">
								<div class="alert x-50">
									
									<strong style="color:#4C0D06!important"><?php echo $_SESSION['status'];?></strong>
								</div>
							</div>
						</div>
					<?php
					unset($_SESSION['status']);
					} ?>
					<h2>Contact form</h2>

					<form action="./../correo2.php" method="post" onsubmit="return verificarFormulario();">
						<div class="form">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label>Full name</label><br>
									<input name="name" id="name" class="name w-100" type="text" placeholder="Your full name">
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label>Mail</label><br>
									<input name="mail" id="mail" class="mail w-100" type="text" placeholder="Your mail">
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label>Phone</label><br>
									<input name="phone" id="phone" class="phone w-100" type="text" placeholder="Your phone">
								<div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
								</div>
							</div>
						</div>
						<p></p>
						<div class="col-12">
							<label>Consultation</label><br>
							<textarea name="comentario" id="comentario" class="w-1004" placeholder="Write the query..."></textarea>	
						</div>
						<p></p>
						<div class="col-12 submit">
							<div class="">
								<button type="reset" class="btn-borrar"><i class="fa fa-eraser pre" style="margin-right: 0.5rem;" aria-hidden="true"></i>Clear</button>
								<button type="submit" value="Enviar mensaje" style="float: right;"class="btn-enviar"><i class="fa fa-paper-plane pre" style="margin-right: 0.5rem;" aria-hidden="true"></i>Send</button>
							</div>
						</div><p></p><p></p><p></p>
					</form>            
				</div>
			</div>
		</div>
        
		<!-- Mapa -->
		<div class="whiteArea" style="margin-top: 0px;">
			<div id="contact">
				<div class="container">
				<h2>Map</h2><br>
					<!-- Mapa insertado -->
					<iframe width="100%" height="450"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?ie=UTF8&amp;cid=18299232296302489264&amp;q=Manuel+Acu%C3%B1a+Kairath+y+Compa%C3%B1%C3%ADa&amp;gl=CL&amp;hl=es&amp;t=m&amp;ll=-33.439302,-70.648527&amp;spn=0.006267,0.006437&amp;z=16&amp;output=embed"></iframe>
				</div>
			</div>
			<p></p>
			<div class="container">
				<!-- Metros cercanos -->
				<div class="row col-12">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<h4><img style="width:50px;" src="../img/metro-logo.png"> Metro Bellas Artes</h4>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<h4><img style="width:50px;" src="../img/metro-logo.png"> Metro Santa Lucía</h4>
					</div>
					<div class="col-4">
					</div>
				</div>
			</div>
		</div>

		<!-- Call to action -->
		<div class="call-2">
			<div class="container" style="padding-top: 40px;">
				<h1 style="color:#fff!important;">Learn about our practice areas</h1>
				<br>
				<a href="asesoria.php"><button type="button" class="btn btn-call-2 "><i class="fa fa-gavel pre" style="margin-right: 0.5rem;" aria-hidden="true"></i>Go to practice areas
				</button></a>
			</div>			
		</div>
        
		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<div class="row sections">
					<div class="span4 recent_posts">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<a class="brand" href="index.php">
									<!-- Logo footer -->
									<img class="logo-f" src="../img/logo-mak-claro.png">
								</a>							
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<!-- Menú de footer -->
								<h3 class="footer_header">Menu</h3>
								<ul class="menu-footer">
									<li>
										<a class="footer-link" href="index.php">Home</a>
									</li>
									<li>
										<a class="footer-link" href="equipo.php">Team</a>
									</li>
									<li>
										<a class="footer-link" href="asesoria.php">Specializations</a>
									</li>
									<li>
										<a class="footer-link" href="vinculos.php">Links</a>
									</li>
									<li>
										<a class="footer-link" href="contacto.php">Contact</a>
									</li>
								</ul>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<!-- Datos contacto -->
								<h3 class="footer_header">Data of interest
                                </h3>
								<div class="post footer-text">
									<p>
										Huérfanos 835, office 1703, <br>Opera building, Santiago <br>
										Tel. (562) 2633 6318 - 2633 0436<br>
										
										
										
									</p>
									<a class="title"></a>
								</div>
								<div class="" style="margin-bottom: 30px;">
									<div class="rrss-idioma">
										<div class="row">
											<!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<a class="redes-footer"href="#"><i class="fa fa-whatsapp"></i></a>
												<a class="redes-footer"href="#"><i class="fa fa-linkedin-square"></i></a>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="margin-top: 10px;">
												<a class="link-footer" href="terminos-condiciones.php">Terms and conditions</a>
											</div>-->
										</div>
									</div>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Scripts -->
		<script type="text/javascript" src="../inc/validacion_correo.js"></script>
		<script src="../inc/js_menu-mobile-normal.js"></script>
	</body>
</html>