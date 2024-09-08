<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
require 'classes/config.php';


$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = Config::SMTP_HOST;
$mail->SMTPAuth = true;
$mail->Port = Config::SMTP_PORT;
$mail->Username = Config::SMTP_USER;
$mail->Password = Config::SMTP_PASSWORD;
$mail->CharSet = 'UTF-8';


/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('recipient@example.com');

$mail->Subject = 'An email sent from PHP';
$mail->Body = 'Please find a file attached.';

$mail->addAttachment(dirname(__FILE__) . '/example.pdf', 'sample.pdf');

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}


