<?php

include "../config.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi,"DELETE FROM jadwal_ibadah WHERE id='$id'");

if ($data) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        window.location.href='../../admin/jadwal.php';
    </script>";
} else {
    echo "<script>
        alert('Data Gagal Dihapus');
        window.location.href='../../admin/jadwal.php';
    </script>";
}

?>