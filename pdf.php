<?php

session_start();

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$im = "./".$_SESSION['file'];

/* Create the object and read the image in */
$im = new Imagick($im);
//resize the image
$im->adaptiveResizeImage(700,800,true);
/* Trim the image. */
$im->trimImage(0);

$fp = fopen($_SESSION['file'], 'w');
fwrite($fp, $im);
fclose($fp);
// echo $im;
// exit;
 $html ='./pdftemplate.php';
function renderToPDF($templateFile)
{
$texto =$_SESSION["Texto"];
$filename =$_SESSION['file'];
  ob_start();
  include $templateFile;
  $contents = ob_get_clean();

  if ($contents !== false)
  {
    $dompdf = new DOMPDF();
    $dompdf->set_option('pdfBackend', 'GD');
    $dompdf->load_html($contents);
    $dompdf->render();
    $dompdf->stream("kapow_ItWorks.pdf");
 }
}

renderToPDF($html);


 ?>