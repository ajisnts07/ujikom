<?php
    include '../connection.php';

    $Id_peserta = $_POST['Id_peserta'];
    $Kd_skema = $_POST['Kd_skema'];
    $Nm_skema = $_POST['Nm_skema'];
    $Nm_peserta = $_POST['Nm_peserta'];
    $Jekel = $_POST['Jekel'];
    $Alamat = $_POST['Alamat'];
    $No_hp = $_POST['No_hp'];

    mysqli_query($conn, "UPDATE peserta SET Kd_skema='$Kd_skema', Nm_skema='$Nm_skema', Nm_peserta='$Nm_peserta', Jekel='$Jekel', Alamat='$Alamat', No_hp='$No_hp' WHERE Id_peserta='$Id_peserta'") or die (mysqli_error($conn));

    echo "Data berhasil diupdate";
    echo "<meta http-equiv='refresh' content='1; url=http://localhost:8080/ujikom/includes/peserta/allPeserta.php'>";
?>