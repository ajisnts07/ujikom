<?php
    $sql = mysqli_query($conn, "SELECT * FROM peserta WHERE (Nm_peserta like '%" .$cari."%')");
?>