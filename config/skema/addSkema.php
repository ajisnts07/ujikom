<?php
    include '../connection.php';

    $Kd_skema = $_POST['Kd_skema'];
    $Nm_skema = $_POST['Nm_skema'];
    $Jenis = $_POST['Jenis'];
    $Jml_unit = $_POST['Jml_unit'];

    mysqli_query($conn, "INSERT INTO skema VALUE ('$Kd_skema','$Nm_skema','$Jenis','$Jml_unit')") or die (mysqli_error($conn));

    echo "Data berhasil diupdate";
    header ("location: http://localhost:8080/ujikom/includes/skema/allSkema.php");
?>