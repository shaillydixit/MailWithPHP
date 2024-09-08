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
$mail->Body = '<h1 style="font-style: italic;">Hello</h1>'
             . "\n"
             . '<p style="color: #f00;">This is an email with some <span style="color: #0f0">CSS styles</span>.</p>';


if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}


