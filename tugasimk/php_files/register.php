<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['r_email'])) {
    header("Location: index.php");
}
 
if (isset($_POST['r_submit'])) {
    $r_email = $_POST['r_email'];
    $r_firstname = $_POST['r_firstname'];
    $r_lastname = $_POST['r_lastname'];
    $r_phone = $_POST['r_phone'];
    $r_password = md5($_POST['r_password']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$r_email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "insert into `users` (email, first_name, last_name, phone, password)
                    VALUES ('$r_email', '$r_firstname', '$r_lastname', '$r_phone', '$r_password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>