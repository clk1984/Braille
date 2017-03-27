<?php

require 'vendor/autoload.php';



$filename = $_SESSION["file"];
$texto = $_SESSION["Texto"];
// reference the Dompdf namespace
use Dompdf\Dompdf;
$html ='<head>';
$html .='<title>pdftempalte</title>';
$html .='<style type="text/css">';
$html .='*, *:before, *:after {';
$html .='box-sizing: inherit;';
$html .='}';
$html .='html {';
$html .='box-sizing: border-box;';
$html .='}';
$html .='.bar {';
$html .='display: flex;';
$html .='  align-items: center;';
$html .='  width: 100%;';
$html .='  background: #eee;';
$html .='  padding: 20px;';
$html .='}';
$html .='.search {';
$html .='  flex: 1;';
$html .='}';
$html .='.logo{';
$html .='	width: 80px;';
$html .='	height: 80px;';
$html .='}';
$html .='.image{';
$html .='	    margin: 0 auto;';
$html .='    /* Para ver el borde del formulario */';
 $html .='   padding: 1em;';
$html .='    border: 1px solid #CCC;';
$html .='    border-radius: 1em;';
$html .='}';
$html .='	</style>';
$html .='<body>';
$html .='<div class="bar">';
$html .='	   <div class="icon icon-1"></div>';
$html .='	  <div class="icon icon-2"></div>';
$html .='	  <div class="logo">';
$html .='	  	<img class="logo" src="./assets/images/Single bird.png">';
$html .='	  </div>';
$html .='	  <div class="pdf "></div>';
$html .='</div>';
$html .='El Texto original " '.$texto.' " se escribe asi en braille : ';
$html .='<br>';
$html .=   '<img src="/var/www/html/braille/'.$filename.'" >';
$html .='</div></body> </html>';
// instantiate and use the dompdf class

$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("$filename");
 ?>