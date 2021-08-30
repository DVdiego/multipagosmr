
<?php
$value_dollar = getHTMLId("https://www.bncr.fi.cr/SitePages/Inicio.aspx","compra");

echo "El valor del dolar es: ".$value_dollar;
function getHTMLId($file, $id){

  $dom = new DomDocument;
  $html = @$dom->loadHTMLfile($file);
    if($html == false){
      return false;
    }

    return $dom->getElementById($id)->nodeValue;
}

?>
