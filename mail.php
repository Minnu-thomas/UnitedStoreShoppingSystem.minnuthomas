<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'C:\wamp64\composer\vendor\autoload.php';

$email = new PHPMailer(true);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$content = "From: $name \n Email: $email \n Message: $message";
$recipient = 'ranulfnoronha@gmail.com';
$mailheader = "From: $email \r\n";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

try {
    $mail->isSMTP();
    $mail->SMTPSecure = 'ssl';
    /* Set the mail sender. */
    $mail->setFrom($email);

    /* Add a recipient. */
    $mail->addAddress('raulfjn@gmail.com');

    /* Set the subject. */
    $mail->Subject = $subject;

    /* Set the mail message body. */
    $mail->Body = $message;

    /* Finally send the mail. */
    $mail->send();
} catch (Exception $e) {
    /* PHPMailer exception. */
    echo $e->errorMessage();
} catch (\Exception $e) {
    /* PHP exception (note the backslash to select the global namespace Exception class). */
    echo $e->getMessage();
}
