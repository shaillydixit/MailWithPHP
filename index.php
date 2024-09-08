<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';


$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = '44409837e94694';
$mail->Password = '2ff6f68b6ebe22';


/**
 * Enable SMTP debug messages
 */
$mail->SMTPDebug = 2;


/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('recipient@example.com');
$mail->Body = 'This is a test message';

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}


