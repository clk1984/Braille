<?php


require 'vendor/autoload.php';
use Dompdf\Dompdf;
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


// $dompdf = new DOMPDF();
// $dompdf->load_html($content);
// $dompdf->render();
// $dompdf->stream("output.pdf");

// instantiate and use the dompdf class

// $dompdf = new Dompdf();
// $dompdf->loadHtml($html);

// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'landscape');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream("$filename");
 ?>