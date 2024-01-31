<?php
    include '../connection.php';

    $Kd_skema = $_GET['Kd_skema'];

    mysqli_query($conn, "DELETE FROM skema WHERE Kd_skema = '$Kd_skema'") or die (mysqli_error($conn));

    echo "Data berhasil dihapus";
    echo "<meta http-equiv='refresh' content='1; url=http://localhost:8080/ujikom/includes/skema/allSkema.php'>";
?>