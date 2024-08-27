<?php 
    /**
     * NIM : 2257401086
     * NAMA : MOH ISMI MUSHOLLINI
     * KELAS : MI22A
     */ 
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "uas_harismunandar";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("Koneksi Gagal Karena : ". mysqli_connect_error());
    }
?>
