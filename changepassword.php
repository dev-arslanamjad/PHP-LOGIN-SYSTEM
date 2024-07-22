<?php
session_start();
include('config.php');

// Fetch the old and new passwords from the POST request
$oldpassword = $_POST['oldpswrd'];
$newpassword = $_POST['newpswrd'];
if ($_SESSION["thepassword"] == $oldpassword) {
    
    // Hash the new password
    $oldhashpassword = md5($oldpassword);
    $hashed_newpassword = md5($newpassword);
    
    // Escape the username and passwords to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_SESSION["thename"]);
    $username = mysqli_real_escape_string($conn, $_SESSION["thename"]);
    $oldpassword_escaped = mysqli_real_escape_string($conn, $oldhashpassword);
    $newpassword_escaped = mysqli_real_escape_string($conn, $hashed_newpassword);

    // Prepare the SQL query to update the password
    $sql = "UPDATE user SET password = '$newpassword_escaped' WHERE name = '$username' ";
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        $_SESSION["thepassword"] = $newpassword;
        echo "<script>alert('Password Changed');window.location.href='profile.php';</script>";
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }

} else {
    echo "<scrip>alert('Wrong Old Password');window.location.href='edit.php';</scrip>";
}
?>
