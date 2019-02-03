<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once("template/meta.php"); ?>

    <title>Jadwal Ibadah</title>

    <?php require_once("template/css.php"); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php require_once("template/sidebar.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once("template/nav.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Jadwal Ibadah</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="tambahJadwal.php" class="btn btn-primary">Tambah jadwal</a>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Pemimpin</th>
                      <th>tanggal</th>
                      <th>tempat</th>
                      <th>alamat</th>
                      <th>liturgi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Pemimpin</th>
                      <th>tanggal</th>
                      <th>tempat</th>
                      <th>alamat</th>
                      <th>liturgi</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    include "../config/config.php";

                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM jadwal_ibadah");
                    while($d = mysqli_fetch_array($data)){

                    ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $d['pemimpin_ibadah']; ?></td>
                      <td><?= $d['tanggal_ibadah']; ?></td>
                      <td><?= $d['tempat_ibadah']; ?></td>
                      <td><?= $d['alamat_ibadah']; ?></td>
                      <td><?= $d['liturgi_ibadah']; ?></td>
                      <td>
                        <a href="../config/crud/edit.php?id=<?= $d['id'];?>" class="btn btn-warning">Edit</a>
                        <a href="../config/crud/hapus.php?id=<?= $d['id'];?>" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require_once("template/footer.php"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once("template/modal.php"); ?>

  <?php require_once("template/js.php"); ?>

</body>

</html>
