<?php

/**
 * Start the timer
 */

use PHPMailer\PHPMailer\PHPMailer;

$start_time = microtime(true);


/**
 * Include external classes
 */
require 'vendor/autoload.php';
require 'classes/Config.php';


/**
 * Configure PHPMailer
 */
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = Config::SMTP_HOST;
$mail->Port = Config::SMTP_PORT;
$mail->SMTPAuth = true;
$mail->Username = Config::SMTP_USER;
$mail->Password = Config::SMTP_PASSWORD;
$mail->SMTPSecure = 'tls';
$mail->CharSet = 'UTF-8';


/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('recipient@example.com');

$mail->Subject = 'An email sent from PHP';
$mail->Body = 'This is a test message';

if ( ! $mail->send()) {
    echo 'Mailer error: ' . $mail->ErrorInfo;
    exit();
}


/**
 * Calculate the time taken to execute the script
 */
$end_time = microtime(true);
$time = number_format($end_time - $start_time, 5);


/**
 * Return to index.php
 */
header("Location: index.php?time=$time");
exit();
