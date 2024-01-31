<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- required meta tag -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="viewport" content="inital-scale=1, minimum-scale=1, width=device-width, height=device-height" />
    <meta name="title" content="Sertip." />
    <meta name="sertifikasi" />
    <!-- title -->
    <title>Update | Sertip.</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../../assets/img/logo-primary.png" type="image/x-icon" />
    <!-- stylesheet -->
    <link rel="stylesheet" href="../../assets/css/app.css" type="text/css" />
  </head>
  <body>
    <?php
        include '../../config/connection.php';

        $Id_peserta = $_GET['Id_peserta'];

        $sql = mysqli_query($conn, "SELECT * FROM peserta WHERE Id_peserta = '$Id_peserta'") or die (mysqli_error($conn));
        $data = mysqli_fetch_array($sql);
    ?>
    <!-- sidebar -->
    <div class="sidebar shadow-sm px-0 px-lg-3 d-none d-lg-inline">
      <!-- container -->
      <div class="container">
        <!-- sidebar-brand -->
        <div class="sidebar-brand text-center py-3">
          <img src="../../assets/img/logo-primary-nobg.png" alt="logo-primary-nobg" />
        </div>
        <!-- accordion -->
        <div class="accordion" id="accordion">
          <div class="small mb-1">Sistem</div>
          <!-- dashboard -->
          <div class="accordion-item">
            <a href="../../index.php" class="gap-2 py-2">
              <iconify-icon icon="solar:home-2-bold" width="32px" height="32px" style="color: #848ba2"></iconify-icon>
              <p>Dashboard</p>
            </a>
          </div>
          <div class="small mt-3 mb-1">Menu</div>
          <!-- sertifikasi -->
          <div class="accordion-item">
            <a href="#" class="accordion-button gap-2 py-2 px-0" data-bs-toggle="collapse" data-bs-target="#sertifikasi" aria-expanded="true" aria-controls="sertifikasi">
              <iconify-icon icon="ph:certificate-fill" width="32px" height="32px" style="color: #848ba2"></iconify-icon>
              <p>Sertifikasi</p>
            </a>
            <!-- accordion-collapse -->
            <div id="sertifikasi" class="accordion-collapse collapse" data-bs-parent="#accordion">
              <a href="../skema/allSkema.php" class="py-2">
                <p>- All Skema</p>
              </a>
              <a href="../skema/addSkema.php" class="py-2">
                <p>- Add Skema</p>
              </a>
            </div>
          </div>
          <!-- peserta -->
          <div class="accordion-item">
            <a href="#" class="accordion-button gap-2 py-2 px-0" data-bs-toggle="collapse" data-bs-target="#peserta" aria-expanded="true" aria-controls="peserta">
              <iconify-icon icon="solar:user-id-bold" width="32px" height="32px" style="color: #1e2463"></iconify-icon>
              <p class="fw-bold" style="color: #1e2463">Peserta</p>
            </a>
            <!-- accordion-collapse -->
            <div id="peserta" class="accordion-collapse collapse show" data-bs-parent="#accordion">
              <a href="../peserta/allPeserta.php" class="py-2">
                <p>- All Peserta</p>
              </a>
              <a href="../peserta/addPeserta.php" class="py-2">
                <p class="fw-bold" style="color: #1e2463">- Add Peserta</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- main -->
    <main>
      <!-- container -->
      <div class="container px-3 px-lg-5 pt-5">
        <!-- row -->
        <div class="row d-flex justify-content-between m-0 mb-5">
          <!-- col-3 -->
          <div class="col-sm-3 p-0">
            <h1 class="mb-1">Peserta</h1>
            <p>Teamwork divides</p>
          </div>
          <!-- col-3 -->
          <div class="col-2 d-lg-flex align-items-center justify-content-center gap-3 d-none">
            <!-- primary-badge -->
            <div class="primary-badge rounded-2">
              <div class="small" id="status">Check</div>
            </div>
            <!-- full-screen -->
            <a href="#" id="fullscreenBtn" class="full-screen d-flex justify-content-center align-items-center rounded-circle">
              <iconify-icon icon="ic:round-fullscreen" width="18" height="18" style="color: #1e2463"></iconify-icon>
            </a>
            <!-- avatar -->
            <div class="avatar">
              <img class="rounded-circle" src="../../assets/img/avatar.jpg" alt="avatar" />
            </div>
          </div>

          <!-- offcanvas-menu -->
          <a href="#offcanvasMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasMenu" class="navbar-toggler mt-4 d-inline d-lg-none">
          <iconify-icon icon="ic:round-menu" width="36" height="36"  style="color: 212121"></iconify-icon>
          </a>

          <div class="offcanvas offcanvas-start py-5" tab-index="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
              <ul>
                <li>
                  <a href="../skema/allSkema.php"><h1>Skema</h1></a>
                </li>
                <li>
                  <a href="../peserta/allPeserta.php"><h1>Peserta</h1></a>
                </li>
              </ul>
          </div>
        </div>

        <h2 class="mb-4">Update Peserta</h2>
        <!-- form -->
        <div class="card col-sm-12 p-4 p-lg-5 rounded-5">
          <h4>Silahkan isi data!</h4>
          <form action="../../config/peserta/updatePeserta.php" method="POST" enctype="multipart/form-data">
            <div class="row my-3">
              <div class="col-sm">
                <input type="hidden" name="Id_peserta" value="<?php echo $data['Id_peserta']; ?>">
                <div class="mb-3">
                  <label for="Kd_skema">Kode Skema</label>
                  <input type="text" class="form-control py-2 rounded-3" name="Kd_skema" autocomplete="off" required value="<?php echo $data['Kd_skema'] ?>"/>
                </div>
                <div class="mb-3">
                  <label for="Nm_peserta">Nama Peserta</label>
                  <input type="text" class="form-control py-2 rounded-3" name="Nm_peserta" autocomplete="off" required value="<?php echo $data['Nm_peserta'] ?>"/>
                </div>
                <div class="mb-3">
                  <label for="Jekel">Jenis Kelamin</label>
                  <input type="text" class="form-control py-2 rounded-3" name="Jekel" autocomplete="off" required value="<?php echo $data['Jekel'] ?>"/>
                </div>
              </div>
              <div class="col-sm">
                <div class="mb-3">
                  <label for="Alamat">Alamat</label>
                  <input type="text" class="form-control py-2 rounded-3" name="Alamat" autocomplete="off" required value="<?php echo $data['Alamat'] ?>"/>
                </div>
                <div class="mb-5">
                  <label for="No_hp">No HP</label>
                  <input type="number" class="form-control py-2 rounded-3" name="No_hp" autocomplete="off" required value="<?php echo $data['No_hp']; ?>"/>
                </div>
                <button type="submit" class="btn w-100 primary-btn rounded-3 py-3">
                  <p>Submit</p>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>

    <!-- javascript -->
    <script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../../assets/js/style.js" type="text/javascript"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js" type="text/javascript"></script>
  </body>
</html>
