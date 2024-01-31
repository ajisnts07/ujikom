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
    <title>Add Skema | Sertip.</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../../assets/img/logo-primary.png" type="image/x-icon" />
    <!-- stylesheet -->
    <link rel="stylesheet" href="../../assets/css/app.css" type="text/css" />
  </head>
  <body>
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
              <iconify-icon icon="ph:certificate-fill" width="32px" height="32px" style="color: #1e2463"></iconify-icon>
              <p class="fw-bold" style="color: #1e2463">Sertifikasi</p>
            </a>
            <!-- accordion-collapse -->
            <div id="sertifikasi" class="accordion-collapse collapse show" data-bs-parent="#accordion">
              <a href="./allSkema.php" class="py-2">
                <p>- All Skema</p>
              </a>
              <a href="./addSkema.php" class="py-2">
                <p class="fw-bold" style="color: #1e2463">- Add Skema</p>
              </a>
            </div>
          </div>
          <!-- peserta -->
          <div class="accordion-item">
            <a href="#" class="accordion-button gap-2 py-2 px-0" data-bs-toggle="collapse" data-bs-target="#peserta" aria-expanded="true" aria-controls="peserta">
              <iconify-icon icon="solar:user-id-bold" width="32px" height="32px" style="color: #848ba2"></iconify-icon>
              <p>Peserta</p>
            </a>
            <!-- accordion-collapse -->
            <div id="peserta" class="accordion-collapse collapse" data-bs-parent="#accordion">
              <a href="../peserta/allPeserta.php" class="py-2">
                <p>- All Peserta</p>
              </a>
              <a href="../peserta/addPeserta.php" class="py-2">
                <p>- Add Peserta</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- main -->
    <main>
      <!-- container -->
      <div class="container px-3 px-lg-5 py-5">
        <!-- row -->
        <div class="row d-flex justify-content-between m-0 mb-5">
          <!-- col-3 -->
          <div class="col-sm-3 p-0">
            <h1 class="mb-1">Sertifikasi</h1>
            <p>Strengthens professionalism</p>
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

        <h2 class="mb-4">Tambah Skema</h2>
        <!-- form -->
        <div class="card col-sm-5 p-4 p-lg-5 rounded-5">
          <h4>Silahkan isi data!</h4>
          <form action="../../config/skema/addSkema.php" method="POST" enctype="multipart/form-data">
            <?php
              include '../../config/connection.php';

              $query = mysqli_query ($conn, "SELECT max(Kd_skema) AS maxId FROM skema");
              $data = mysqli_fetch_array ($query);
              $autoCode = $data['maxId'];

              $no = (int) substr ($autoCode, 3, 3);
              $no++;
              $code = "SKM-";

              $autoCode = $code . sprintf ("%03s", $no);
            ?>
            <div class="my-3">
              <label for="Kd_skema">Kode Skema</label>
              <input type="text" class="form-control py-2 rounded-3" name="Kd_skema" value="<?php echo $autoCode; ?>" placeholder="Contoh: SKM-001"/>
            </div>
            <div class="mb-3">
              <label for="Nm_skema">Nama Skema</label>
              <input type="text" class="form-control py-2 rounded-3" name="Nm_skema" autocomplete="off" required autofocus/>
            </div>
            <div class="mb-3">
              <label for="Jenis">Jenis</label>
              <select class="form-select py-2 rounded-3" name="Jenis" id="Jenis">
                <option selected>Open this select menu</option>
                <option value="KKNI">KKNI</option>
                <option value="Cluster">Cluster</option>
              </select>
            </div>
            <div class="mb-5">
              <label for="Jml_unit">Jumlah Unit</label>
              <input type="text" class="form-control py-2 rounded-3" name="Jml_unit" autocomplete="off" required />
            </div>
            <button type="submit" class="btn w-100 primary-btn rounded-3 py-3">
              <p>Submit</p>
            </button>
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
