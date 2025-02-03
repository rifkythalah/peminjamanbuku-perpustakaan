<?php

session_start();

include 'config/app.php';

// menerima id buku yang dipilih
$id_buku = (int)$_GET['id_buku'];

if (delete_buku($id_buku) > 0) {
    echo "<script>
            alert('Data Buku Berhasil Dihapus');
            document.location.href = 'buku.php';
            </script>";
} else {
    echo "<script>
            alert('Data Buku Gagal Dihapus');
            document.location.href = 'buku.php';
            </script>";
}