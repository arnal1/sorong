<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <?php require_once("template/css.php"); ?>

        <title>Homepage</title>
    </head>
    <body>
        <?php require_once("template/nav.php"); ?>

        <div class="container">

            <section class="main">

                <div class="row">

                    <?php
                    include "config/config.php";
                    $data = mysqli_query($koneksi,"SELECT * FROM jadwal_ibadah");
                    while($d = mysqli_fetch_array($data)){
                    ?>

                    <div class="col-md-3">

                        <div class="card">
                            <div class="card-header">
                                <?= $d['tanggal_ibadah']; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $d['pemimpin_ibadah']; ?></h5>
                                <p class="card-text"><?= $d['alamat_ibadah']; ?></p>
                                <p class="card-text"><?= $d['tanggal_ibadah']; ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>

                    <?php } ?>

                </div>

            </section>

            <footer>

            </footer>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php require_once("template/js.php"); ?>
    </body>
</html>