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


// /**
//  * Enable SMTP debug messages
//  */
// $mail->SMTPDebug = 2;


/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('recipient@example.com');


// Multiple "To" addresses
$mail->addAddress('alice@example.com', 'Alice');
$mail->addAddress('alan@example.com');

// "Cc" addresses
$mail->addCC('colin@example.com', 'Colin');
$mail->addCC('chris@example.com');

// "Bcc" addresses
$mail->addBCC('bob@example.com');
$mail->addBCC('becky@example.com');


$mail->Subject = 'An email sent from PHP';
$mail->Body = 'This is a test message';

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}


