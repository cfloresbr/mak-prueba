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
		<link href="../inc/bootstrap.min.css" rel="stylesheet">
		<link href="../inc/theme.css" rel="stylesheet" type="text/css">
		<link href="../inc/index.css" rel="stylesheet" type="text/css" media="screen">
		<link href="../inc/css" rel="stylesheet" type="text/css">
		<link href="../inc/animate.css" rel="stylesheet" type="text/css" media="screen, projection">
		<link href="../inc/portfolio.css" rel="stylesheet" type="text/css" media="screen">
		<link href="../inc/contact.css" type="text/css" rel="stylesheet" media="screen">
		<link rel="icon" type="image/png" href="../img/shortcut.png"/>
		<!-- Carrousel -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">

		<!-- Fontawesome -->
		<script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js" defer crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.13.1/js/v4-shims.js" defer crossorigin="anonymous"></script>
        <script type="text/javascript" src="../inc/source.js"></script><!-- Header 2 -->						
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
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
									<div class="navbar-toggler-icon" style="margin-top: 20px;">
										<i class="fas fa-bars" style="color:#B79E9C; font-size:2rem;"></i>
									</div>
								</button>	
								<!-- Redes sociales y botón Español -->
								<div class="rrss-idioma float-end" style="margin-top:14px!important;padding-bottom:;">
									<!--<a class="redes-header"href="#"><i style="padding-top: 2px;" class="fa fa-whatsapp"></i></a>
									<a class="redes-header"href="#"><i style="padding-top: 2px;" class="fa fa-linkedin-square"></i></a>-->
									<a class="" href="../es/index.php"><span style="padding: 0 10px; color:#B79E9C!important;" class="combobox">Español</span></a>
								</div>
							</div>
							
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
							<!-- Opciones del menú -->
							<div class="menu2 row collapse navbar-collapse float-end"  id="collapseExample">
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
									<!--<li class="item-menu">
										<a href="vinculos.php" class="nav-item nav-link pruebaDrupal" data-drupal-link-system-path="node/168">Links</a>
									</li>-->
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
			<img width="100%" src="../img/portada.png">
		</div> -->

		<!-- carousel -->
		<div class="carousel">
			<!-- list item -->
			<div class="list">
				<div class="item">
					<img src="../img/slide1.png">
				</div>

				<div class="item">
					<img src="../img/slide2.png">
				</div>

				<div class="item">
					<img src="../img/slide3.png">
				</div>
			</div>
			<!-- list thumnail -->
			<div class="thumbnail">
				<div class="item">
					
				</div>
				<div class="item">
					
				</div>
				
				<div class="item">
					
				</div>
			</div>
			<!-- next prev -->

			<div class="arrows">
				<button id="prev"><</button>
				<button id="next">></button>
			</div>
			<!-- time running -->
			<div class="time"></div>
		</div>

		<!-- Presentación primera sección -->
		<div id="showcase">
			<div id="features">
				<div class="container">
					<div class="section_header col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-0 mb-5">
						<h1>Manuel Acuña Kairath - Lawyers</h1>
						<div class="row" style="margin-bottom: 30px;">
							<div class="col-12">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<p>
											The practice of the Firm focuses on litigation and legal advice, which covers different people, companies, public organizations, among others. The team is highly trained in different fields of professional practice, covering all types of trials, advising on highly complex negotiations, participating in the drafting of contracts and their compliance.
										</p>
										<p>
											The Firm has successfully handled, for almost 50 years, varied cases from the most diverse branches of Law, up to the highest levels and Courts of the Republic.
										</p>
										<p>
											In recent years, the founding partner of the Law Firm has stopped being on the front line, delegating part of this responsibility to his children, along with those who manage it.
										</p>
										<p>
											Gerardo Andrés Acuña is a partner and commercial engineer and Carlos Arturo Acuña is a partner and the chief lawyer of the Firm.
										</p><br>
									</div>
									<br>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<img style="width: 100%;"src="../img/mak-vista7.png">
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<img style="width: 100%;"src="../img/mak-alta.png">
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<img style="width: 100%;"src="../img/mak-vista8.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>

		<!-- Áreas de práctica -->
		<div class="greyArea">
			<div class="container">
				<div class="col-12">
					<div class="row">
						<h1>Specializations</h1><p></p>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="asesoria.php#slide1" id=""><img class="w-100" style="max-height: 260px;" src="../img/comercial2.png"></a><p></p>
							<h3>Civil Matters</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="asesoria.php#slide2"><img class="w-100" style="max-height: 260px;" src="../img/asesoria1-2.png"></a><p></p>
							<h3>Criminal Matters</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="asesoria.php#slide3"><img class="w-100" style="max-height: 260px;" src="../img/litigio2.png"></a><p></p>
							<h3>Commercial Matter
							</h3>
						</div><p><br></p>
						<div class="col-12">
							<a href="asesoria.php"><button type="button" class="btn btn-principal w-100"><i class="fa fa-gavel pre" style="margin-right: 0.5rem;" aria-hidden="true"></i>
								Learn about practice areas</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Vínculos 
		<div class="whiteArea slide-inicio">
			<div class="container">
				<h1>Links</h1><p></p>
			</div>
			<div class="container">
				<div class="carousel">
					<div class="carousel__contenedor">
						<-- Botonera de áreas ->
						<button aria-label="Anterior" class="carousel__anterior" style="top: calc(50% - 35px)">
							<i class="fas fa-chevron-left"></i>
						</button>
						<-- Listado de sliders ->
						<div class="carousel__lista" style="padding-top: 1rem!important;">
							<div class="carousel__elemento" style="margin-right: 20px">
								<img style="margin-bottom: 20px;max-height: 260px;" src="../img/silueta-m2.png">
								<h3>Engineer Luciana Cruz</h3>
							</div>
							<div class="carousel__elemento" style="margin-right: 20px">
								<img style="margin-bottom: 20px;max-height: 260px; width: 100%;" src="../img/v-auditoria2.png">
								<h3>ACONSA Auditores Consultores Limitada</h3>
							</div>
							<div class="carousel__elemento" style="margin-right: 20px">
								<img style="margin-bottom: 20px;max-height: 260px; width: 100%;" src="../img/intelectual2.png">
								<h3>Engineering</h3>
							</div>
							<div class="carousel__elemento" style="margin-right: 20px">
								<img  style="margin-bottom: 20px;max-height: 260px; width: 100%;" src="../img/asesoria3-1.png">
								<h3>Engineering Civil and Industrial</h3>
							</div>
						</div>
				
						<button aria-label="Siguiente" class="carousel__siguiente" style="top: calc(50% - 35px)">
							<i class="fas fa-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<a href="vinculos.php"><button type="button" class="btn btn-principal w-100"><i class="fa fa-link pre" style="margin-right: 0.5rem;" aria-hidden="true"></i>Know links</button></a>
		</div>-->

		<!-- Call to action -->
		<div class="call-1">
			<div class="container" style="padding-top: 40px;">
				<h1>Contact us</h1>
				<p style="color:#303030; margin-top: 20px;">Send us your questions through the contact form.</p>
				<a href="contacto.php"><button type="button" class="btn btn-call "><i class="fa fa-envelope pre" style="margin-right: 0.5rem;" aria-hidden="true"></i>Go to contact
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
									<!--<li>
										<a class="footer-link" href="vinculos.php">Links</a>
									</li>-->
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
		<script src="../inc/jquery-latest.js"></script>
		<script src="../inc/bootstrap.min.js"></script>
		<script src="../inc/theme.js"></script>
		<script type="text/javascript" src="../inc/index-slider.js"></script>
		<script type="text/javascript" src="../inc/validacion_correo.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.js"></script>
        <script src="../inc/app2.js"></script>
		
		<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"es"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxTrustedUrl":{"\/search\/node":true},"user":{"uid":0,"permissionsHash":"c76a290dcfa462d8c8c7abc7f5abf1400ebcc7ae03d287320d6e20da06dc637d"}}</script>
		<script src="../inc/js_menu-mobile-normal.js"></script>
		<script src="../inc/slide.js"></script>
	</body>
</html>