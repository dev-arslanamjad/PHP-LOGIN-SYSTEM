<?php
session_start();
$username =  $_SESSION["thename"];
$useremail =  $_SESSION["theemail"];
$userpassword =  $_SESSION["thepassword"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 4;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'arslanamjad4444@gmail.com';
    $mail->Password   = 'ckinpjxybbqvaowu';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('arslanamjad4444@gmail.com', 'Facebook');
    $mail->addAddress($useremail, $username);


    $mail->isHTML(true);
    $mail->Subject = "Successfully Created an Account";
    $mail->Body    = "Dear <b>$username<b> You can use the following details to login next time <br> Your Username is <b>$username<b><br> Your Email is <b>$useremail<b><br> Your Password is <b>$userpassword<b>";
    if ($mail->send()) {
        echo "<script>window.location.href='loginpage.php';</script>";
    } else {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
} 
?>
