<?php
    include '../connection.php';

    $Kd_skema = $_POST['Kd_skema'];
    $Nm_skema = $_POST['Nm_skema'];
    $Jenis = $_POST['Jenis'];
    $Jml_unit = $_POST['Jml_unit'];

    mysqli_query($conn, "UPDATE skema SET Nm_skema='$Nm_skema', Jenis='$Jenis', Jml_unit='$Jml_unit' WHERE Kd_skema='$Kd_skema'") or die (mysqli_error($conn));

    echo "Data berhasil diupdate";
    echo "<meta http-equiv='refresh' content='1; url=http://localhost:8080/ujikom/includes/skema/allSkema.php'>";
?>