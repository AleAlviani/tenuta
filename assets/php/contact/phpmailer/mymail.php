<?php

$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;

require ('class.phpmailer.php');
require('PHPMailerAutoload.php');


$mail = new PHPMailer();

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alessandro@nordicbalance.co.uk';   // SMTP username
$mail->Password = 'Nordic*01!';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom = $email;

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Tenuta Culaccione';
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>