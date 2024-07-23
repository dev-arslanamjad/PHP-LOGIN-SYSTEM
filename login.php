<?php
session_start();
include('config.php');
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email == "" & $password == "") {
    echo "<script>alert('Please fill all the required Fields');window.location.href='loginpage.php';</script>";
  } else {
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['email'] == $email) {
      $longpassword = md5($password);
      if ($row['password'] == $longpassword) {    //Password and email Matched
        if ($row['is_varified'] == 1) {
          $_SESSION["theid"] =  $row['id'];
          $_SESSION["thename"] =  $row['name'];
          $_SESSION["theemail"] =  $row['email'];
          $_SESSION["thepassword"] = $password;
          header("location: dashboard.php");
        } else {
          $_SESSION["theid"] =  $row['id'];
          $_SESSION["thename"] =  $row['name'];
          $_SESSION["theemail"] =  $row['email'];
          $_SESSION["thepassword"] = $password;
          header("location: unverified.php");
        }
      } else {
        echo "<script>alert('Wrong Password! try another?');window.location.href='loginpage.php';</script>";
      }
    } else {
      echo "<script>alert('User Not Found Try Again');window.location.href='loginpage.php';</script>";
    }
  }
}
