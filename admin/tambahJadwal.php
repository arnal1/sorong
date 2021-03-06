<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once("template/meta.php"); ?>

    <title>Dashboard</title>

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
            <h1 class="h3 mb-4 text-gray-800">Tambah jadwal</h1>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                
                <div class="card-body">

                    <form action="../config/crud/tambah.php" method="post">
                        <div class="form-group">
                            <label for="pemimpin_ibadah">Pemimpin Ibadah</label>
                            <input type="text" class="form-control" id="pemimpin_ibadah" name="pemimpin_ibadah">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_ibadah">Tanggal Ibadah</label>
                            <input type="date" class="form-control" id="tanggal_ibadah" name="tanggal_ibadah">
                        </div>
                        <div class="form-group">
                            <label for="tempat_ibadah">Tempat Ibadah</label>
                            <input type="text" class="form-control" id="tempat_ibadah" name="tempat_ibadah">
                        </div>
                        <div class="form-group">
                            <label for="alamat_ibadah">Alamat Ibadah</label>
                            <input type="text" class="form-control" id="alamat_ibadah" name="alamat_ibadah">
                        </div>
                        <div class="form-group">
                            <label for="liturgi_ibadah">Liturgi Ibadah</label>
                            <input type="text" class="form-control" id="liturgi_ibadah" name="liturgi_ibadah">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                    
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
