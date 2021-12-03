<?php 
 
$server = "localhost";
$user = "rico";
$pass = "123456";
$database = "sistem_topsa";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>