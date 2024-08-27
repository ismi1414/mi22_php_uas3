<?php
     /**
     * NIM : 2257401086
     * NAMA : MOH ISMI MUSHOLLINI
     * KELAS : MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>
