<?php
    include '../connection.php';

    $Id_peserta = $_GET['Id_peserta'];

    mysqli_query($conn, "DELETE FROM peserta WHERE Id_peserta = '$Id_peserta'") or die (mysqli_error($conn));

    echo "Data berhasil dihapus";
    echo "<meta http-equiv='refresh' content='1; url=http://localhost:8080/ujikom/includes/peserta/allPeserta.php'>";
?>