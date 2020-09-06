<!DOCTYPE HTML>
<?php
include('php/currency.php');
?>
<html lang="es">
	<head>

		<title>Multipagos MR</title>
		<meta name="multipagos" content="En MultipagosMR puede realizar sus pagos de cualquier servicio, de forma ágil, segura y cuando lo requiera.">
		<meta name="robots" content="index, follow">
		<meta property="og:title" content="Multipagos MR" />
		<meta property="og:type" content="Servicio de transferencia de dinero" />
		<meta property="og:url" content="http://www.multipagosmr.com/" />
		<meta property="og:image" content="http://www.multipagosmr.com/images/portadaFB.jpg" />
		<meta property="og:description" content="En MultipagosMR puede realizar sus pagos de cualquier servicio, de forma ágil, segura y cuando lo requiera." />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

		<script src="https://kit.fontawesome.com/97604b5bc2.js" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script data-ad-client="ca-pub-1437720056979019" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKJR77R" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	</head>
	<body class="is-preload">

		<div id="page-wrapper">
			<!-- Navigation -->
			<nav class="navbar navbar-expand-lg navbar-dark static-top">

			  <div class="container">
			    <a class="navbar-brand" href="#">
			    	<img src="images/logo-multipagos.png" alt="Multipagos-MR">
			    </a>

			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			    </button>

			    <div class="collapse navbar-collapse" id="navbarResponsive">
			      <ul class="navbar-nav ml-auto">
			        <li class="nav-item active">
			          <a class="nav-link" href="#carousel">Inicio
			                <span class="sr-only">(current)</span>
			          </a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#services-title">Servicios</a>
			        </li>
							<li class="nav-item">
								<a class="nav-link" href="#map-title">Ubicación</a>
							</li>
			        <li class="nav-item">
			          <a class="nav-link" href="#footer">Contacto</a>
			        </li>
			      </ul>
			    </div>

			  </div>
			</nav>

			<?php
				$tasas = xmlParser();
				$compra = $tasas['compraDolares'] - 6;
				$venta = $tasas['ventaDolares'] + 6;

				echo '<section id="services-header" class="wrapperx style col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="exchange">';
				echo '<img src="images/tipos-logo-sm.png" alt="tipos logo">';
				echo '        <span>&raquo;Tipos de cambio:  $US Compra = ₡'.$compra.' | $US Venta = ₡'.$venta.' </span>';
				echo'
										</div>
							</section>';
			 ?>

		<div id="carousel" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
				<!-- <li data-target="#demo" data-slide-to="3"></li> -->
			</ul>
			<div class="carousel-inner">

				<div class="carousel-item active">
					<img src="images/horario-normal.jpg" class="img-responsive" alt="Atendemos en emergencia covid19" >
					<div class="carousel-caption">
						<header>

						</header>
					</div>
				</div>

				<div class="carousel-item">
					<img src="images/portadaFB.jpg" class="img-responsive" alt="Pago servicios básicos" >
					<div class="carousel-caption">
						<header>

						</header>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/recargas-celulares.jpg" class="img-responsive" alt="Recargas celulares" >
					<div class="carousel-caption">
						<header>

						</header>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/opciones-pago.jpg" class="img-responsive" alt="Rarias opciones de pago" >
					<div class="carousel-caption">
						<header>

						</header>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#carousel" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#carousel" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>

		</div>


		<!-- Gigantic Heading -->
		<section id="services-title" class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2 id="spacing-title">¿Qué puedo pagar en Multipagos MR?</h2>
					<h3> Puedes pagar cualquier tipo de pagos según el convenio disponible. A continuación encontrará los pagos disponibles.</h3>
				</header>
			</div>
		</section>

	<!-- Highlights -->
		<section id="services" class="wrapper style1">

			<div class="container">
					<div class="row">

						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
											<i class='fa fa-lightbulb-o' style='font-size:3rem;color:#525252'></i>
											<h3>Luz</h3>
										</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/ice.png" alt="paga-ICE"></div>
												<div class="grid-item"><img src="images/cnfl.png" alt="paga-cnfl"></div>
												<div class="grid-item"><img src="images/esph.png"  alt="paga-esph"></div>
												<div class="grid-item"><img src="images/coopelesca.png"  alt="paga-coopelesca"></div>
												<div class="grid-item"><img src="images/jasec.png"  alt="paga-jasec"></div>
												<div class="grid-item"><img src="images/coopesantos.png"  alt="paga-coopesantos"></div>
												<div class="grid-item"><img src="images/coopeguanacaste.png"  alt="paga-coopeguanacaste"></div>
											</div>

									</div>
								</div>

						</section>




						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fas fa-water' style='font-size:3rem;color:#525252'></i>
										<h3>Agua</h3>
									</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/aya.png"  alt="paga-AyA"></div>
											  <div class="grid-item"><img src="images/esph.png"  alt="paga-ESPH"></div>
											  <div class="grid-item"><img src="images/eco.png"  alt="paga-ECO"></div>
											</div>

									</div>
								</div>

						</section>



						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fas fa-percent' style='font-size:3rem;color:#525252'></i>
										<h3 style="font-size: 1.3rem;">Municipalidad</h3>
									</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/msj.png"  alt="paga-municipalidad-san jose"></div>
												<div class="grid-item"><img src="images/mh.png"  alt="paga-ministerio-hacienda"></div>
											</div>

									</div>
								</div>

						</section>


						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fa fa-user-md' style='font-size:3rem;color:#525252'></i>
										<h3>Seguros</h3>
									</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/ccss.png" alt="paga-ccss"></div>
												<div class="grid-item"><img src="images/ins.png" alt="paga-ins"></div>
												<div class="grid-item"><img src="images/mn.png" alt="paga-magisterio-nacional"></div>
												<div class="grid-item"><img src="images/oceanica.png" alt="paga-oceanica"></div>
												<div class="grid-item"><img src="images/mapfre.png"  alt="paga-mapfre"></div>
											</div>

									</div>
								</div>

						</section>

						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
											<i class='fas fa-mobile-alt' style='font-size:3rem;color:#525252'></i>
											<h3 style="font-size: 1.3rem;">Teléfono & Internet</h3>
										</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/kolbi.png" alt="paga-kolbi"></div>
											  <div class="grid-item"><img src="images/claro.png" alt="paga-claro"></div>
											  <div class="grid-item"><img src="images/movistar.png" alt="paga-movistar"></div>
											  <div class="grid-item"><img src="images/esph.png" alt="paga-esph"></div>
												<div class="grid-item"><img src="images/cc.png" alt="paga-comunicacion-constante"></div>
												<div class="grid-item"><img src="images/luminet.png" alt="paga-luminet"></div>
												<div class="grid-item"><img src="images/racsa.png" alt="paga-racsa"></div>
												<div class="grid-item"><img src="images/tigo.png" alt="paga-tigo"></div>
												<div class="grid-item"><img src="images/telecable.png" alt="paga-telecable"></div>
												<div class="grid-item"><img src="images/cabletica.png" alt="paga-cabletica"></div>
												<div class="grid-item"><img src="images/jasec.png" alt="paga-jasec"></div>
												<div class="grid-item"><img src="images/coopelesca.png" alt="paga-coopelesca"></div>
											</div>

									</div>
								</div>

						</section>




						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
											<i class='fas fa-satellite-dish	' style='font-size:3rem;color:#525252'></i>
											<h3 style="font-size: 1.3rem;">TvSatelital & Cable </h3>
										</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/cabletica.png" alt="paga-cabletica"></div>
												<div class="grid-item"><img src="images/telecable.png" alt="paga-telecable"></div>
												<div class="grid-item"><img src="images/tigo.png" alt="paga-tigo"></div>
												<div class="grid-item"><img src="images/sky.png" alt="paga-sky"></div>
												<div class="grid-item"><img src="images/cablevision.png" alt="paga-cablevision"></div>
												<div class="grid-item"><img src="images/clarotv.png" alt="paga-clarotv"></div>
												<div class="grid-item"><img src="images/coopesantos.png" alt="paga-coopesantos"></div>
												<div class="grid-item"><img src="images/movistar.png" alt="paga-movistar"></div>
											</div>

									</div>
								</div>

						</section>




						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fab fa-uniregistry' style='font-size:3rem;color:#525252'></i>
										<h3 style="font-size: 1.3rem;">Pagos Universidad</h3>
										</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/ulatina.png"  alt="paga-universidad latina"></div>
												<div class="grid-item"><img src="images/una.png"  alt="paga-una"></div>
												<div class="grid-item"><img src="images/tec.png" alt="paga-tec"></div>
												<div class="grid-item"><img src="images/ucr.png" alt="paga-ucr"></div>
												<div class="grid-item"><img src="images/ufidelitas.png" alt="paga-universidad fidelitas"></div>
											</div>

									</div>
								</div>

						</section>


						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fa fa-car' style='font-size:3rem;color:#525252'></i>
										<h3 style="font-size: 1.3rem;">Seguridad Vial</h3>
									</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/cosevi.png" alt="paga-cosevi"></div>
												<div class="grid-item"><img src="images/compass.png" alt="paga-compass"></div>
											</div>

									</div>
								</div>

						</section>


						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fas fa-money-check-alt' style='font-size:3rem;color:#525252'></i>
										<h3>Remesas</h3>
									</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/western_union.jpg"></div>
											</div>

									</div>
								</div>

						</section>



						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='far fa-credit-card' style='font-size:3rem;color:#525252'></i>
										<h3>Tarjetas</h3>
									</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/bn.png" alt="paga-banco nacional"></div>
												<div class="grid-item"><img src="images/bac.png" alt="paga-BAC"></div>
												<div class="grid-item"><img src="images/credisiman.png" alt="paga-credisiman"></div>
												<div class="grid-item"><img src="images/credix.png" alt="paga-credix"></div>
											</div>

									</div>
								</div>

						</section>


						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fa fa-bank' style='font-size:3rem;color:#525252'></i>
										<h3>Bancos</h3>
									</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/bn.png" alt="paga-banco nacional"></div>
												<div class="grid-item"><img src="images/bac.png" alt="paga-BAC"></div>
											</div>

									</div>
								</div>

						</section>




						<section class="col-lg-6 col-md-12 col-12">

								<div class="row">
									<div class="col-3">
										<div id="icono">
										<i class='fas fa-landmark' style='font-size:3rem;color:#525252'></i>
										<h3>Créditos</h3>
										</div>
									</div>
									<div class="col-1">
										<i class='fa fa-angle-right' style='font-size:3rem;color:#525252'></i>
									</div>
									<div class="col-8">

											<div class="grid-container">
												<div class="grid-item"><img src="images/bn.png" alt="paga-banco nacional"></div>
												<div class="grid-item"><img src="images/bac.png" alt="paga-BAC"></div>
											</div>

									</div>
								</div>

						</section>

					</div>
				</div>
			</div>
		</section>

		<!-- Gigantic Heading -->
		<section id="map-title" class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2 id="spacing-title">Ubicación</h2>
					<h3> Revisa nuestro horario y encuentranos en la siguiente dirección.</h3>
				</header>
			</div>
		</section>

		<!-- Map -->
		<section id="map" class="wrapper style1">
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.5885342478581!2d-84.08899723188068!3d9.904434234991003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e349b4790c7d%3A0x895e99fde5ef5601!2sMultipagos+MR!5e0!3m2!1ses!2scr!4v1564796299901!5m2!1ses!2scr" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>

		<!-- Footer -->
		<div id="footer">
			<section class="wrapper style2">
				<div class="container">
					<div class="row">
						<section class="col-md-4 col-sm-12">
							<h3><i class="far fa-calendar-alt"></i> Horario</h3>
							<ul class="links">
								<li style="font-size: large;">Lunes a Sabado: 09:00am a 04:00pm. </li>
								<li style="font-size: large;">Domingo: Cerrado. </li>
								<li style="font-size: small;">*Horario "Especial" por el COVID19. </li>
							</ul>
						</section>
						<section class="col-md-4 col-sm-12">
							<h3><i class="fas fa-phone-square-alt"></i> Teléfono</h3>
							<ul class="links">
								<li style="font-size: large;">8414-8902</li>
								<li style="font-size: small;">*Atención al cliente: 10:00am a 12:00pm y 2:00pm a 4:00pm.</li>
							</ul>
						</section>

						<section class="col-md-4 col-sm-12">
							<h3><i class="fas fa-map-marked-alt"></i> Dirección</h3>
							<ul class="links">
								<li style="font-size: small;">600 metros Sur del Wallmart de San Sebastian, contiguo a la plaza de deportes.
									San Sebastian.
									San José.</li>
							</ul>
						</section>
					</div>
					<div id="icons">
						<div>
							<ul class="icons">
								<li><a href="https://www.facebook.com/MultipagosMR/?ref=py_c" target="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/MultipagosMR/?ref=py_c" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.facebook.com/MultipagosMR/?ref=py_c" target="_blank" class="icon brands fa-instagram"><span class="label">LinkedIn</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>


		<!-- Copyright -->
		<div id="copyright">
			<div>
				<ul class="menu">
					<li>&copy; iSoft Solutions. All rights reserved.</li><li> Powered by <a href="http://isoftsolutions.es/ " target="_blank">isoftsolutions.es</a></li>
				</ul>
			</div>
		</div>

	 </div>
  </div>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKJR77R"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
