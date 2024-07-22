<?php
session_start();
include('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION["thepassword"] = $password;
$cpassword = $_POST['cpassword'];
if ($password == $cpassword) {
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($email !== $row["email"]) {
        $longpassword = md5($password);
        $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$longpassword')";
        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $_SESSION["thename"] =  $row['name'];
            $_SESSION["theemail"] =  $row['email'];
            $_SESSION["theemail"] =  $row['email'];
            $_SESSION['thepassword'] = $password;
            header("location: email.php");
        }
    } else {
        echo "<script>alert('Email Already Exists try another')</script>";
    }
} else {
    echo "<script>alert('Password Do not matched');window.location.href='regform.php';</script>";
}
?>