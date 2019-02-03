<?php

include "../config.php";

$pemimpin_ibadah = $_POST['pemimpin_ibadah'];
$tanggal_ibadah = $_POST['tanggal_ibadah'];
$tempat_ibadah = $_POST['tempat_ibadah'];
$alamat_ibadah = $_POST['alamat_ibadah'];
$liturgi_ibadah = $_POST['liturgi_ibadah'];

$data = mysqli_query($koneksi,"INSERT INTO jadwal_ibadah VALUES('','$pemimpin_ibadah','$tanggal_ibadah','$tempat_ibadah','$alamat_ibadah','$liturgi_ibadah')");

if ($data) {
    echo "<script>
        alert('Data Berhasil Diinput');
        window.location.href='../../admin/jadwal.php';
    </script>";
} else {
    echo "<script>
        alert('Data Gagal Diinput');
        window.location.href='../../admin/jadwal.php';
    </script>";
}

?>