<?php
function xmlParser(){

	//cargar el fichero xml en un objeto del tipo DOM
	$url = 'https://bnmovil.bnonline.fi.cr/LoginM/TipoCambio/Index';
	$dom = new DomDocument;
	@$dom->loadHTMLfile($url);
	//almacenar la estructura xml obtenida, en una variable

  $elements = $dom->getElementsByTagName('div');

  // print_r($elements);

  $cont1 = 0;
  $cont2 = 0;

  $cadena = "";

  if (!is_null($elements)) {
  foreach ($elements as $element) {
    //echo "padre $cont1 ". $element->nodeName. ": ";

	  $nodes = $element->childNodes;
	  foreach ($nodes as $node) {
	    //echo "hijo $cont2". $node->nodeValue. "---\n";

	    if($cont2 == '3'){
	      $cadena = $node->nodeValue;
	      //echo $cadena;
	    }
	    $cont2 = $cont2+1;
	  }
	    $cont1 =  $cont1+1;
	  }
	}

	// $posicion = strrpos($cadena,'588');
	//
	// echo '<br>';
	// echo $posicion;
  $compra = $cadena[131].$cadena[132].$cadena[133];
  $venta = $cadena[250].$cadena[251].$cadena[252];

	// echo " compra=".$compra;
	// echo " venta=".$venta;

	$array = [
	    "compraDolares" => $compra,
	    "ventaDolares" => $venta,
	];

	return $array;
}
?>
