<?php
    session_start();

    // navbar login atau belum
    if (isset($_SESSION['email'])) {
      include 'template/navbar_logged.php'; 
    } else {
      include 'template/navbar.php'; 
    }
?>