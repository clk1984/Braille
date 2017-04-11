<?php
session_start();
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$im = "./".$_SESSION['file'];
$im = new Imagick($im);
//resize the image
$im->adaptiveResizeImage(700,800,true);
/* Trim the image. */
$im->trimImage(0);

$fp = fopen($_SESSION['file'], 'w');
fwrite($fp, $im);
fclose($fp);

//include './pdf.php';
$html ='./pdftemplate.php';
function renderToPDF($templateFile)
{
$texto =$_SESSION["Texto"];
$filename =$_SESSION['file'];
$_SESSION['pdfPath']='.tmp/'.uniqid().'.pdf';
  ob_start();
  include $templateFile;
  $contents = ob_get_clean();

  if ($contents !== false)
  {
    $dompdf = new DOMPDF();
    $dompdf->set_option('pdfBackend', 'GD');
    $dompdf->load_html($contents);
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents($_SESSION['pdfPath'], $output);
 }
}
//$path =$_SESSION['pdfPath'] ;
renderToPDF($html);
$mail=$_POST['correo'];
// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
$message = Swift_Message::newInstance()
    ->setSubject('Su traduccion de braille.com')
    ->setFrom(array('admin@braille.top' => 'Braille'))
   ->setTo($mail)
    ->setBody('Adjuntamos la traduccion echa en braille.top')
     ->attach(Swift_Attachment::fromPath($_SESSION['pdfPath']));


// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);


// Send the message
$result = $mailer->send($message);
 ?>