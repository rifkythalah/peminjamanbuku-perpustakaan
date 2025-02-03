<?php

session_start();

include 'config/app.php';

// menerima id akun yang dipilih
$id_user = (int)$_GET['id_user'];

if (delete_akun($id_user) > 0) {
    echo "<script>
            alert('Data Akun Berhasil Dihapus');
            document.location.href = 'user.php';
            </script>";
} else {
    echo "<script>
            alert('Data Akun Gagal Dihapus');
            document.location.href = 'user.php';
            </script>";
}