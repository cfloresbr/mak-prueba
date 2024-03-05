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
        <!-- Carrousel -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">

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
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
									<div class="navbar-toggler-icon" style="margin-top: 20px;">
										<i class="fas fa-bars" style="color:#B79E9C; font-size:2rem;"></i>
									</div>
								</button>	
								<!-- Redes sociales y botón Español -->
								<div class="rrss-idioma float-end" style="margin-top:14px!important;padding-bottom:;">
									<!--<a class="redes-header"href="#"><i style="padding-top: 2px;" class="fa fa-whatsapp"></i></a>
									<a class="redes-header"href="#"><i style="padding-top: 2px;" class="fa fa-linkedin-square"></i></a>-->
									<a class="" href="../es/asesoria.php"><span style="padding: 0 10px; color:#B79E9C!important;" class="combobox">Español</span></a>
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

        <!-- Portada -->
		<div class="portada">
			<img width="100%" src="../img/portada-3.png">
		</div>
        
		<!-- Breadcrums -->
        <div class="container breads" style="margin-top:20px">
			<a class="breadcrums" href="index.php">Home</a>&nbsp;<span style="color:#B79E9C; font-size: 12pt;"><i style="" class="fa fa-chevron-right"></i></span><span class="texto-breads"> Specializations</span>
		</div>

		<div id="features">
            <div class="container">
                <div class="section_header">
                    <br>
					<!-- Título de página -->
                    <h1>Specializations</h1>
                    <h3>
						<!-- Presentación -->
                        <p>
							Our Firm, during these almost 50 years, has advised its varied range of clients in the most diverse areas of Law. Given the complexity and problems of the issues that have been dealt with, there is constant specialization of the team members. The relationships with our clients are based on the trust that has been generated between both parties for a long time.
                        </p>
                        <p>
							Practice areas focus on the following:
                        </p><br><br>
                    </h3>
                </div>
            </div>
        </div>
        
        <div class="greyArea mt-4" style="padding-top: 2rem!important;">
            <div class="container">
                <div class="carousel">
                    <div class="carousel__contenedor">
                        <!-- Botonera de áreas -->
                        <ul class="slider-controler">
                            <li><a href="#slide1">Civil Matters</a></li> 
                            <li><a href="#slide2">Criminal Matters</a></li> 
                            <li><a href="#slide3">Commercial Matter</a></li> 
                            <li><a href="#slide4">Administrative Matter</a></li> 
                            <li><a href="#slide5">Other areas</a></li>
                        </ul>

                        <button aria-label="Anterior" class="carousel__anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <!-- Listado de sliders -->
                        <div class="carousel__lista">
                            <div class="carousel__elemento" id="slide1">
                                <img style="float: left;margin-right: 30px;margin-bottom: 20px" src="../img/comercial2.png">
                                <h3>Civil Matters</h3><hr style="color: grey;">
                                <p>
									Effective possessions, inheritances and estate planning; drafting contracts of all kinds such as sale and purchase of real estate, promises, mutual agreements, etc.; in addition to representing the client as plaintiff or defendant in ordinary, summary, and executive trials, among other matters.
                                </p>
                            </div>
                            <div class="carousel__elemento" id="slide2">
                                <img style="float: left;margin-right: 30px;margin-bottom: 20px;" src="../img/asesoria2-1.png">
                                <h3>Criminal Matters</h3><hr style="color: grey;">
                                <p>
									Representation of clients as plaintiffs, as well as defending defendants; processing before the Guarantee Courts, Oral Criminal Courts, Public Ministry, among other organizations.
                                </p>
                            </div>
                            <div class="carousel__elemento" id="slide3">
                                <img style="float: left;margin-right: 30px;margin-bottom: 20px;" src="../img/litigio2.png">
                                <h3>Commercial Matter</h3><hr style="color: grey;">
                                <p>
                                    Representation of clients seeking bankruptcy and failed defense, incorporation of companies such as corporations, limited liability individual limited liability companies, joint stock companies, etc., drafting of commercial contracts such as mandate, commission, current account loan, exchange, etc. Asset reorganization, liquidation and resumption procedure.
                                </p>
                            </div>
                            <div class="carousel__elemento" id="slide4">
                                <img style="float: left;margin-right: 30px;margin-bottom: 20px;" src="../img/intelectual2.png">
                                <h3>Administrative Matter</h3><hr style="color: grey;">
                                <p>
									Management and processing of various matters before bodies of the State Administration, such as the Commission for the Financial Market, General Treasury of the Republic, Internal Tax Services, Council for Transparency, among others and Municipalities.
                                </p>
                            </div>
                            <div class="carousel__elemento" id="slide5">
                                <img  style="float: left;margin-right: 30px;margin-bottom: 20px;" src="../img/asesoria3-1.png">
                                <h3>Other areas</h3><hr style="color: grey;">
                                <p>
									Protection resources, defense of consumer rights, processing before local police courts, intellectual and industrial property, aeronautical law, among others. Likewise, the Firm has external collaborators for certain subjects as well as prestigious informants in law.
                                </p>
                            </div>
                        </div>
        
                        <button aria-label="Siguiente" class="carousel__siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to action -->
			<div class="call-1" style="">
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
        <script src="../inc/app.js"></script>

        <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"es"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxTrustedUrl":{"\/search\/node":true},"user":{"uid":0,"permissionsHash":"c76a290dcfa462d8c8c7abc7f5abf1400ebcc7ae03d287320d6e20da06dc637d"}}</script>
		<script src="../inc/js_menu-mobile-normal.js"></script>
    </body>
</html>