<?php
require 'vendor/autoload.php';



// Create the message
$message = Swift_Message::newInstance()

  // Give the message a subject
  ->setSubject('Your subject')

  // Set the From address with an associative array
  ->setFrom(array('john@doe.com' => 'John Doe'))

  // Set the To addresses with an associative array
  ->setTo(array('doneinpaper662@gmail.com', 'other@domain.org' => 'A name'))

  // Give it a body
  ->setBody('Here is the message itself')

  // And optionally an alternative body
  ->addPart('<q>Here is the message itself</q>', 'text/html');

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('pajaro.com', 25)
  ->setUsername('your username')
  ->setPassword('your password')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message

// Send the message
$result = $mailer->send($message);
  // Optionally add any attachments
  // ->attach(Swift_Attachment::fromPath('my-document.pdf'))
  ;
 ?>