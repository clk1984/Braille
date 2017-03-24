<?php
$url = 'http://www.webservicex.net/braille.asmx?WSDL';
$parametros=array(); //parametros de la llamada
 $parametros['InText'] = htmlspecialchars($_POST['InText']);
 $parametros['TextFontSize'] = 20;
// $parametros['encoding'] = 'UTF-8';
 $client = new SoapClient($url,$parametros);
 $result = $client->BrailleText($parametros);
 $result = $result->BrailleTextResult;
 $out = 'a.jpg';


//echo '<img src="data:image/jpeg;base64,'.$result.'"/>';
echo $result;

     ?>
