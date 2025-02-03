<?php

session_start();

include 'config/app.php';

// menerima id peminjaman yang dipilih
$id_peminjaman = (int)$_GET['id_peminjaman'];

if (delete_peminjaman($id_peminjaman) > 0) {
    echo "<script>
            alert('Data Peminjaman Berhasil Dihapus');
            document.location.href = 'peminjaman.php';
            </script>";
} else {
    echo "<script>
            alert('Data Peminjaman Gagal Dihapus');
            document.location.href = 'peminjaman.php';
            </script>";
}