<?php
require 'vendor/autoload.php';
$im = "./".$_SESSION['file'];

/* Create the object and read the image in */
$im = new Imagick($im);

/* Trim the image. */
$im->trimImage(0);

/* Ouput the image */
header("Content-Type: image/" . $im->getImageFormat());
echo $im;

?>

