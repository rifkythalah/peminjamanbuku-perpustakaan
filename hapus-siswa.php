<?php

session_start();

include 'config/app.php';

// menerima id siswa yang dipilih
$nis = (int)$_GET['nis'];

if (delete_siswa($nis) > 0) {
    echo "<script>
            alert('Data Siswa Berhasil Dihapus');
            document.location.href = 'siswa.php';
            </script>";
} else {
    echo "<script>
            alert('Data Siswa Gagal Dihapus');
            document.location.href = 'siswa.php';
            </script>";
}