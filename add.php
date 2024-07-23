<?php
session_start();
include('config.php');

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
$_SESSION["thepassword"] = $password;
if ($password == $cpassword) {
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($email == $row["email"]) {
        $longpassword = md5($password);
        $v_code = bin2hex(random_bytes(16));
        $sql = "INSERT INTO user (name, email, password, `verification-code`, is_varified) VALUES ('$name', '$email', '$longpassword', '$v_code', '')";
        
        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            $_SESSION["thename"] = $row['name'];
            $_SESSION["theemail"] = $row['email'];
            $_SESSION['thepassword'] = $password;

            header("location: email.php");
        } else {
            echo "<script>alert('Error: " . $conn->error . "');window.location.href='regform.php';</script>";
        }
    } else {
        echo "<script>alert('Email already exists, try another');window.location.href='regform.php';</script>";
    }
} else {
    echo "<script>alert('Passwords do not match');window.location.href='regform.php';</script>";
}
?>
