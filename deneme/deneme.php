<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer();

// Settings
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.gmail.com";    // SMTP server example
// $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure   = "ssl";                  // enable SMTP authentication
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "ahmetcelikbas333333@gmail.com";            // SMTP account username example
$mail->Password   = "jnimrdfoieollptx";            // SMTP account password example

// Content
$mail->AddReplyTo("ustad@sahibinden.com", "sex");
$mail->addAddress('ahmetcelikbas3333@gmail.com');

$mail->isHTML(true);                       // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();


?>