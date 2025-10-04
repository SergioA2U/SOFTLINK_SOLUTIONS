<?php
session_start();

if (!isset($_SESSION['username'])) {
   
    header("Location: iniciar sesión.php?error=access_denied");
    exit(); 
}
?>