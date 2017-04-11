<?php
session_start();
$url = 'http://www.webservicex.net/braille.asmx?WSDL';
$parametros=array(); //parametros de la llamada
 $parametros['InText'] = htmlspecialchars($_POST['InText']);
$_SESSION["Texto"] = $parametros['InText'];

 $parametros['TextFontSize'] = 20;
// $parametros['encoding'] = 'UTF-8';

 $client = new SoapClient($url,$parametros);

 $result = $client->BrailleText($parametros);

 $result = $result->BrailleTextResult;

$file = $result;

$filename = '.tmp/'.uniqid().'.jpg';

$fp = fopen($filename, 'x+');
fwrite($fp, $file);
fclose($fp);
$_SESSION["file"] = $filename;
echo $file;
     ?>
