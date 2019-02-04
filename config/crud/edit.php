<?php

include "../config.php";

$id = $_POST['id'];
$pemimpin_ibadah = $_POST['pemimpin_ibadah'];
$tanggal_ibadah = $_POST['tanggal_ibadah'];
$tempat_ibadah = $_POST['tempat_ibadah'];
$alamat_ibadah = $_POST['alamat_ibadah'];
$liturgi_ibadah = $_POST['liturgi_ibadah'];

$data = mysqli_query($koneksi,"UPDATE jadwal_ibadah SET pemimpin_ibadah='$pemimpin_ibadah',tanggal_ibadah='$tanggal_ibadah',tempat_ibadah='$tempat_ibadah',alamat_ibadah='$alamat_ibadah',liturgi_ibadah='$liturgi_ibadah' WHERE id='$id'");

if ($data) {
    echo "<script>
        alert('Data Berhasil Diedit');
        window.location.href='../../admin/jadwal.php';
    </script>";
} else {
    echo "<script>
        alert('Data Gagal Diedit');
        window.location.href='../../admin/jadwal.php';
    </script>";
}

?>