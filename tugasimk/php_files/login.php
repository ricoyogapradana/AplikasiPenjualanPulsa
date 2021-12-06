<?php

include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['email'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['password'] = $row['password'];
        header("Location: index.php");
    } else {
        echo "<script>      
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Email or Password went wrong!',
            })
        </script>";
    }
}

?>