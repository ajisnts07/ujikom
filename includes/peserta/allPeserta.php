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
    <title>All Peserta | Sertip.</title>
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
                <p class="fw-bold" style="color: #1e2463">- All Peserta</p>
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

        <div class="d-flex">
          <h2>Daftar Peserta</h2>
          <a href="./addPeserta.php" class="btn primary-btn ms-3 rounded-circle d-flex justify-content-center align-items-center">
            <iconify-icon icon="ic:baseline-plus" width="16" height="16" style="color: #fff"></iconify-icon>
          </a>
        </div>
        <!-- form search -->
        <form action="allPeserta.php">
          <!-- input-group -->
          <div class="col-sm-3 ms-auto search my-3 mt-lg-0">
            <div class="input-group">
              <input type="text" class="form-control border-0 rounded-start-pill ps-4" placeholder="Ketik nama peserta" name="cari" />
              <button type="submit" class="submit btn rounded-circle primary-btn d-flex justify-content-center align-items-center p-2 z-3">
                <iconify-icon icon="dashicons:search" width="30" height="30" style="color: #ffffff"></iconify-icon>
              </button>
            </div>
          </div>
        </form>

        <!-- table -->
        <div class="table-responsive">
          <table class="table table-condesed px-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th>Kode Skema</th>
                <th>Nama Skema</th>
                <th>Nama Peserta</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Action</th>
              </tr>
            </thead>

            <?php
              include '../../config/connection.php';

              $no = 1;
              if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                include '../../config/peserta/searchPeserta.php';
              } else {
                include '../../config/peserta/allPeserta.php';
              }
              while (
                $data = mysqli_fetch_array($sql)
              ) {
            ?>
            <tbody>
              <tr>
                <td scope="row"><?php echo $no++; ?></td>
                <td><?php echo $data['Kd_skema']; ?></td>
                <td><?php echo $data['Nm_skema']; ?></td>
                <td><?php echo $data['Nm_peserta']; ?></td>
                <td><?php echo $data['Jekel']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['No_hp']; ?></td>
                <td class="d-flex gap-1">
                  <a href="./updatePeserta.php?Id_peserta=<?php echo $data['Id_peserta']; ?>" class="action rounded-circle" style="background-color: #2ebd59">
                    <iconify-icon icon="flowbite:edit-outline" width="16" height="16" style="color: #fff"></iconify-icon>
                  </a>
                  <a href="../../config/peserta/deletePeserta.php?Id_peserta=<?php echo $data['Id_peserta']; ?> " class="action rounded-circle" style="background-color: #f16843">
                    <iconify-icon icon="ic:round-delete-outline" width="16" height="16" style="color: #fff"></iconify-icon>
                  </a>
                </td>
              </tr>

              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <!-- javascript -->
    <script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../../assets/js/style.js" type="text/javascript"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js" type="text/javascript"></script>
  </body>
</html>
