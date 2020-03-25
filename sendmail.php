<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\htdocs\profilfondsgit\composer\vendor\autoload.php';

/* If you installed PHPMailer without Composer do this instead: */
/*
require 'C:\PHPMailer\src\Exception.php';
require 'C:\PHPMailer\src\PHPMailer.php';
require 'C:\PHPMailer\src\SMTP.php';
*/

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

try {

    $mail->setFrom('profileringsfondsnhlstenden@gmail.com');
    $mail->addAddress('sanderkreijsig@hotmail.com', 'sander kreijsig');
    $mail->Subject = 'Force';
    $mail->Body = 'There is a great disturbance in the Force.';

    /* SMTP parameters. */

    /* Tells PHPMailer to use SMTP. */
    $mail->isSMTP();

    /* SMTP server address. */
    $mail->Host = 'smtp.gmail.com';

    /* Use SMTP authentication. */
    $mail->SMTPAuth = TRUE;

    /* Set the encryption system. */
    $mail->SMTPSecure = 'ssl';

    /* SMTP authentication username. */
    $mail->Username = 'profileringsfondsnhlstenden@gmail.com';

    /* SMTP authentication password. */
    $mail->Password = 'TestPswdNhlstenden!';

    /* Set the SMTP port. */
    $mail->Port = 465;

    /* Finally send the mail. */
    $mail->send();
}
catch (Exception $e)
{
    echo $e->errorMessage();
}
catch (\Exception $e)
{
    echo $e->getMessage();
}