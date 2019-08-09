<!DOCTYPE HTML>


<html lang="es">
	<head>
		<title>MultipagosMR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- <script src="scripts/sendData.js"></script> -->
		<!-- AJAX por CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

	</head>
	<body class="is-preload">

		<div id="page-wrapper">

			<!-- Header -->


			<!-- Navigation -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
			  <div class="container">
			    <a class="navbar-brand" href="#">
			          <img src="images/logo-multipagos.png" alt="Multipagos MR">
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
			          <a class="nav-link" href="#services">Servicios</a>
			        </li>
							<li class="nav-item">
								<a class="nav-link" href="#map">Localicación</a>
							</li>
			        <li class="nav-item">
			          <a class="nav-link" href="#footer">Contacto</a>
			        </li>
			      </ul>
			    </div>
			  </div>



			</nav>
			<?php
			// $value_dollar = getHTMLId("https://bncrappsmobappprod.azurewebsites.net/api/ConsultaTipoCambios?pCanal=IBP",'compraDolares');

		//getXML();
		//	get_Data();

		xmlParser();


				// echo "El valor del dolar es:\n";
				// echo $value_dollar;
			 ?>

			<!-- Banner -->
				<!-- <section id="banner">
					<header>
						<h2>Worktime Control <em>Applicación web para controlar la jornada laboral <a href="http://isoftworktime.com/demo">Demo aquí</a></em></h2>
						<a href="#projects" class="button">Infórmate más</a>
					</header>
				</section> -->



		<div id="carousel" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/portadaFB.png" class="img-responsive" alt="Worktime Control" >
					<div class="carousel-caption">
						<header>

						</header>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/3slide.png" class="img-responsive" alt="Chicago" >
					<div class="carousel-caption">
						<header>

						</header>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/5slide.png" class="img-responsive" alt="Chicago" >
					<div class="carousel-caption">
						<header>

						</header>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/7slide.png" class="img-responsive" alt="Chicago" >
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

							</header>
						</div>
					</section>

			<!-- Highlights -->
				<section id="services" class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<section class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="box highlight">
									<img id="imgServicios" src="images/Luz.png"/>
									<h3>Luz</h3>
									<p></p>
								</div>
							</section>

							<section class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="box highlight">
									<img id="imgServicios" src="images/Agua.png"  />
									<h3>Agua</h3>

								</div>
							</section>

							<section class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="box highlight">
									<img id="imgServicios" src="images/Telefonia.png"  />
									<h3>Teléfono</h3>

								</div>
							</section>

							<section class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="box highlight">
									<img id="imgServicios" src="images/Tarjetas-de-Credito.png"  />
									<h3>Tarjetas</h3>

								</div>
							</section>

							<section class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="box highlight">
									<img id="imgServicios" src="images/Bancos.png"  />
									<h3>Bancos</h3>

								</div>
							</section>

							<section class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="box highlight">
									<img id="imgServicios" src="images/Bancos.png"  />
									<h3>Créditos</h3>

								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h2 id="spacing-title">Ubicación</h2>

						</header>
					</div>
				</section>

			<!-- Posts -->
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
								<h3>Horario</h3>
								<ul class="links">
									<li><a href="#">Lunes a Viernes 7:00 a 18:00 </a></li>
								</ul>
							</section>
							<section class="col-md-4 col-sm-12">
								<h3>Teléfono</h3>
								<ul class="links">
									<li><a href="#">1234-5678</a></li>
								</ul>
							</section>

							<section class="col-md-4 col-sm-12">
								<h3>Dirección</h3>
								<ul class="links">
									<li><a href="#">214,
										San José Province,
										San José</a></li>
								</ul>
							</section>


						</div>
						<div id="icons">
							<div>
								<ul class="icons">
									<li><a href="https://twitter.com/" target="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/" target="_blank" class="icon brands fa-instagram"><span class="label">LinkedIn</span></a></li>
									<li><a href="https://www.youtube.com/" target="_blank" class="icon brands fa-youtube"><span class="label">Facebook</span></a></li>
								</ul>
							</div>
						</div>
					</section>
					</div>

					<!-- Icons -->

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



		<!-- Scripts -->

			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!-- <script src="assets/js/main.js"></script> -->

	</body>
</html>
<?php

function getHTMLId(){

		$url = 'https://bncrappsmobappprod.azurewebsites.net/api/ConsultaTipoCambios?pCanal=IBP';

  $xmlDoc = new DomDocument;
  $html = @$xmlDoc->loadHTMLfile($url);
    if($html == false){
      return false;
    }
		$x = $xmlDoc->documentElement;
		$elemento = $x->getElementsByTagName('body');



		$dolares = $elemento->item(0)->getElementsByTagName('compraDolares');


		var_dump($dolares);


		$variable = "";

		foreach ($elemento AS $x){
			print $x->nodeName . " = " . $x->nodeValue . "<br />";
			$variable = $x->nodeValue;



		}

		// echo gettype($variable);

		$array = explode(",", $variable);



}



function getXML(){


	$url = 'https://bncrappsmobappprod.azurewebsites.net/api/ConsultaTipoCambios?pCanal=IBP';
	$xml = @simplexml_load_string($url, "SimpleXMLElement", LIBXML_NOCDATA);
	$json = json_encode($xml);
	$array = json_decode($json,TRUE);

	var_dump($xml);

	foreach ($array as $x) {

		echo "array: ".$x;

	}

}

function get_Data(){

	$url = 'https://bncrappsmobappprod.azurewebsites.net/api/ConsultaTipoCambios?pCanal=IBP';
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);


	$xml = simplexml_load_string($data) or die("Something is wrong");

	print_r($xml);
	var_dump($xml->Result);
	// return $xml;
}


function xmlParser(){

	$url = 'https://bncrappsmobappprod.azurewebsites.net/api/ConsultaTipoCambios?pCanal=IBP';


	$dom = new DomDocument;
	@$dom->loadHTMLfile($url);
	$file = $dom->saveXML();
	// var_dump($file);
	$xml = simplexml_load_string($file, "SimpleXMLElement", LIBXML_NOCDATA);
	$json = json_encode($xml);
	$lista = json_decode($json,TRUE);
	$xml_aux = "";
	// var_dump("xml:".$xml."<br>");
	// var_dump("json:".$json."<br>");
	//var_dump("array:".$array."<br>");
	// print_r($xml);

	$elemento = $xml->body[0];


	$value = (string) $xml->body[0];

	// print_r($elemento);


	$item = $elemento->p;

	// print_r($item);
	echo "el item= ".$item;

	$item2 = "'$item'";

	echo ' el item2 = '.$item2;

	$json2 = json_decode($item, true);

	var_dump($json2);
	echo "<br>";
	echo "Compra Dolares: ".$json2['compraDolares'];
	echo "Venta Dolares: ".$json2['ventaDolares'];


	// foreach($lista as $elemento => $detalles)
	// {
	// 	echo "<h1> $elemento </h1>";
	//
	//     foreach($detalles as $tag => $item)
	// 	{
	// 		echo "<p> $tag </p>";
	//
	//
	// 	}
	// }





}




?>
