<?php
session_start();
include('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
function sendmail($email, $v_code)
{
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

        $mail->setFrom('arslanamjad4444@gmail.com', 'Fakebook');
        $mail->addAddress($email);


        $mail->isHTML(true);
        $mail->Subject = "Successfully Created an Account";
        $mail->Body    = "Thankew for Registering You can use the following Link to verify <br> <b><a href='http://localhost/emailverify/verify.php?email=$email&v_code=$v_code'>Click me to Verify</a><b><br>";
        if ($mail->send()) {
            $conn = mysqli_connect("localhost", "root", "", "emailverify");
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $_SESSION["thename"] = $name;
            echo "<script>alert('Please check your Email to verify');window.location.href='unverified.php';</script>";
        } else {
            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
$_SESSION["thepassword"] = $password;
if ($password == $cpassword) {
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($email !== $row["email"]) {
        $longpassword = md5($password);
        $v_code = bin2hex(random_bytes(16));
        $sql = "INSERT INTO user (name, email, password, `verification-code`, is_varified) VALUES ('$name', '$email', '$longpassword', '$v_code', '')";
        $v_code;
        if ($conn->query($sql) === TRUE && sendmail($_POST['email'], $v_code)) {
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $_SESSION["thename"] = $row['name'];
            $_SESSION["theemail"] = $row['email'];
            $_SESSION['thepassword'] = $password;
        } else {
            echo "<script>alert('Error: " . $conn->error . "');window.location.href='regform.php';</script>";
        }
    } else {
        echo "<script>alert('Email already exists, try another');window.location.href='regform.php';</script>";
    }
} else {
    echo "<script>alert('Passwords do not match');window.location.href='regform.php';</script>";
}
