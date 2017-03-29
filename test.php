<?php
echo session_save_path();
 phpinfo();

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "localhost";
    $to = "doneinpaper662@gmail.com";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";

 ?>
