<?php
 /**
     * NIM : 2257401086
     * NAMA : MOH ISMI MUSHOLLINI
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>