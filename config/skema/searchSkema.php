<?php
    $sql = mysqli_query($conn, "SELECT * FROM skema WHERE (Nm_skema like '%" .$cari."%')");
?>