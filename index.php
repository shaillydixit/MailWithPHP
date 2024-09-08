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
$mail->isHTML(true);

/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('recipient@example.com');

$mail->Subject = 'An email sent from PHP';
$mail->Body = '<h2>External Image</h2>'
             . '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Red_Apple.jpg/265px-Red_Apple.jpg">'
             . "\n"
             . '<h2>Embedded Image</h2>'
             . '<img src="cid:banana">';

$mail->AddEmbeddedImage(dirname(__FILE__) . '/banana.png', 'banana');


if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}


