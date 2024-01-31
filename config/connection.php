<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sertifikasi";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (mysqli_connect_error()) {
        echo "Gagal Koneksi : " . mysqli_error($conn);
    }