<?php

session_start();

include 'config/app.php';

// menerima id siswa yang dipilih
$id_petugas = (int)$_GET['id_petugas'];

if (delete_petugas($id_petugas) > 0) {
    echo "<script>
            alert('Data Petugas Berhasil Dihapus');
            document.location.href = 'petugas.php';
            </script>";
} else {
    echo "<script>
            alert('Data Petugas Gagal Dihapus');
            document.location.href = 'petugas.php';
            </script>";
}