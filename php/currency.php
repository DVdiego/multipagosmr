<?php

function xmlParser(){

	//cargar el fichero xml en un objeto del tipo DOM
	//$url = 'https://bncrappsmobappprod.azurewebsites.net/api/ConsultaTipoCambios?pCanal=IBP';
	//buscar estos enlaces en el archivo scripts de banco nacional
	$url = 'https://app-bnmibanco-v2-0-0-bncr-as.bnenlinea.com/api/ConsultaTipoCambios?pCanal=IBP';
	$dom = new DomDocument;
	@$dom->loadHTMLfile($url);
	//almacenar la estructura xml obtenida, en una variable
	$file = $dom->saveXML();

	//parsear el fichero xml
	$xml = simplexml_load_string($file, "SimpleXMLElement", LIBXML_NOCDATA);

	//obtener el array que contiene los datos de interes
	$elemento = $xml->body[0];
	$value = (string) $xml->body[0];
	$item = $elemento->p;

	$json = json_decode($item, true);

	return $json;

}


?>
