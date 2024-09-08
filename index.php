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


// Add a different reply to address
$mail->addReplyTo('shaillydixit999@gmail.com', 'Shailly');


$mail->Subject = 'An email sent from PHP';
$mail->Body = 'This is a test message';

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}


